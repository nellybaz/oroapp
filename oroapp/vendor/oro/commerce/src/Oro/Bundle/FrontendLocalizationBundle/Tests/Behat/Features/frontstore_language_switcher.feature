@regression
@ticket-BAP-14671
@fixture-OroFrontendLocalizationBundle:frontstore-customer.yml
Feature: FrontStore language switcher
  In order to manage available localizations for language switcher
  As Administrator
  I need to enable Localizations at System Configuration
  As Frontend User
  I need to be able to switch between Localizations

  Scenario: Feature Background
    Given I login as administrator
    And go to System/ Localization/ Languages

  Scenario Outline: Add Languages
    And click "Add Language"
    And fill in "Language" with "<Language Full Name>"
    And click "Add Language" in modal window
    Then I should see "Language has been added" flash message
    And click "Enable" on row "<Language Short Name>" in grid
    Then I should see "Language has been enabled" flash message

    Examples:
      | Language Full Name          | Language Short Name |
      | Dutch (Netherlands) - nl_NL | Dutch               |
      | Japanese (Japan) - ja_JP    | Japanese            |

  Scenario: Update cache
    Given go to System/ Localization/ Translations
    When click "Update Cache"
    Then I should see "Translation Cache has been updated" flash message

  Scenario Outline: Add Localizations
    Given I go to System/ Localization/ Localizations
    And click "Create Localization"
    And fill "Create Localization Form" with:
      | Name       | <Language Short Name> |
      | Title      | <Language Short Name> |
      | Language   | <Language Full Name>  |
      | Formatting | <Language Full Name>  |
    When I save and close form
    Then I should see "Localization has been saved" flash message

    Examples:
      | Language Full Name  | Language Short Name |
      | Dutch (Netherlands) | Dutch               |
      | Japanese (Japan)    | Japanese            |

  Scenario: Enable Localizations at System Configuration
    Given I go to System/Configuration
    And I follow "System Configuration/General Setup/Localization" on configuration sidebar
    And I fill "System Config Form" with:
      | Enabled Localizations | [English,  Dutch, Japanese] |
    And I save form
    Then Enabled Localizations field should has [English,  Dutch, Japanese] value

  Scenario: Verify Switcher for anonymous front-end user
    Given I am on homepage
    When I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | Dutch    |
      | English  |
      | Japanese |
    And I should see that "English" localization is active

    When I select "Dutch" localization
    And I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | English  |
      | Dutch    |
      | Japanese |
    And I should see that "Dutch" localization is active

    When I select "Japanese" localization
    And I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | English  |
      | Dutch    |
      | Japanese |
    And I should see that "Japanese" localization is active

  Scenario: Verify Switcher for logged in front-end user
    Given I signed in as AmandaRCole@example.org on the store frontend
    When I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | Dutch    |
      | English  |
      | Japanese |
    And I should see that "English" localization is active

    When I select "Dutch" localization
    And I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | English  |
      | Dutch    |
      | Japanese |
    And I should see that "Dutch" localization is active

    When I select "Japanese" localization
    And I press "Localization Switcher"
    Then I should see that localization switcher contains localizations:
      | English  |
      | Dutch    |
      | Japanese |
    And I should see that "Japanese" localization is active
