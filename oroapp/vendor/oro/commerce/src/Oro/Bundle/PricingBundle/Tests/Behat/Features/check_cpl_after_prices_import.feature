@fixture-OroPricingBundle:ProductPrices.yml
Feature: Check CPL after Prices Import
  ToDo: BAP-16103 Add missing descriptions to the Behat features

  Scenario: Create two session
    Given I login as AmandaRCole@example.org the "Buyer" at "first_session" session
    And I login as administrator and use in "second_session" as "Admin"

  Scenario: Import new prices
    Given I operate as the Admin
    When I go to Customers/Customers
    And click Edit first customer in grid
    And I choose Price List "Default Price List" in 1 row
    And I submit form
    Then I should see "Customer has been saved" flash message

    And I go to Sales/Price List
    And click View Default Price List in grid
    And I download "ProductPrice" Data Template file
    And I fill template with data:
      | Product SKU | Quantity | Unit Code | Price | Currency |
      | PSKU1       | 1        | item      | 11    | USD      |
      | PSKU1       | 2        | item      | 21    | USD      |
      | PSKU1       | 3        | item      | 31    | USD      |
    Then I import file

    When I continue as the Buyer
    And I am on the homepage
    And I click "NewCategory"
    And I click "Product 1"
    And I should see "$ 11.00"
