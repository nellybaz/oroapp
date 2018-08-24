@regression
@ticket-BB-8806
@fixture-OroFlatRateShippingBundle:FlatRateIntegration.yml
@fixture-OroAuthorizeNetBundle:AuthorizeNetFixture.yml
Feature: Process order submission with PayPal PayFlow Gateway and Authorize & Capture payment action
  ToDo: BAP-16103 Add missing descriptions to the Behat features
  Scenario: Create new PayPal PayFlow Gateway Integration
    Given I login as AmandaRCole@example.org the "Buyer" at "first_session" session
    And I login as administrator and use in "second_session" as "Admin"
    When I go to System/Integrations/Manage Integrations
    And I click "Create Integration"
    And I select "PayPal Payflow Gateway" from "Type"
    And I fill PayPal integration fields with next data:
      | Name                         | PayPalFlow           |
      | Label                        | PayPalFlow           |
      | Short Label                  | PPlFlow              |
      | Allowed Credit Card Types    | Mastercard           |
      | Partner                      | PayPal               |
      | Vendor                       | qwerty123456         |
      | User                         | qwer12345            |
      | Password                     | qwer123423r23r       |
      | Payment Action               | Authorize            |
      | Express Checkout Name        | ExpressPayPal        |
      | Express Checkout Label       | ExpressPayPal        |
      | Express Checkout Short Label | ExprPPl              |
    And I save and close form
    Then I should see "Integration saved" flash message
    And I should see PayPalFlow in grid

  Scenario: Create new Payment Rule for PayPal PayFlow Gateway integration
    Given I go to System/Payment Rules
    And I click "Create Payment Rule"
    And I check "Enabled"
    And I fill in "Name" with "PayPalPro"
    And I fill in "Sort Order" with "1"
    And I select "PayPalFlow" from "Method"
    And I press "Add Method Button"
    And I save and close form
    Then I should see "Payment rule has been saved" flash message

  Scenario: Successful order payment and error on capture with PayPal PayFlow Gateway
    Given There are products in the system available for order
    And I operate as the Buyer
    When I open page with shopping list List 1
    And I press "Create Order"
    And I select "Fifth avenue, 10115 Berlin, Germany" on the "Billing Information" checkout step and press Continue
    And I select "Fifth avenue, 10115 Berlin, Germany" on the "Shipping Information" checkout step and press Continue
    And I check "Flat Rate" on the "Shipping Method" checkout step and press Continue
    And I fill credit card form with next data:
      | CreditCardNumber | 5424000000000015 |
      | Month            | 11               |
      | Year             | 2027             |
      | CVV              | 123              |
    And I click "Continue"
    And I press "Submit Order"
    Then I see the "Thank You" page with "Thank You For Your Purchase!" title

    Then I operate as the Admin
    And I go to System/Integrations/Manage Integrations
    And I click Edit PayPalFlow in grid
    And I fill PayPal integration fields with next data:
      | User | invalid |
    And I save and close form
    Then I should see "Integration saved" flash message
    And I go to Sales/Orders
    And I click View Payment authorized in grid
    And I click "Capture"
    Then I should see "Charge The Customer" in the "UiWindow Title" element
    When I click "Yes, Charge" in modal window
    Then I should see "Declined" flash message

  Scenario: Unsuccessful order payment, capture button is not shown in backoffice
    Given There are products in the system available for order
    And I continue as the Buyer
    When I open page with shopping list List 2
    And I press "Create Order"
    And I select "Fifth avenue, 10115 Berlin, Germany" on the "Billing Information" checkout step and press Continue
    And I select "Fifth avenue, 10115 Berlin, Germany" on the "Shipping Information" checkout step and press Continue
    And I check "Flat Rate" on the "Shipping Method" checkout step and press Continue
    And I fill credit card form with next data:
      | CreditCardNumber | 5105105105105100 |
      | Month            | 11               |
      | Year             | 2027             |
      | CVV              | 123              |
    And I click "Continue"
    And I press "Submit Order"
    Then I should see "We were unable to process your payment. Please verify your payment information and try again." flash message

    Then I operate as the Admin
    And I go to Sales/Orders
    And I click View Payment declined in grid
    And I wait for action
    Then I should see following "Transactions History Grid" grid:
      | Id | Payment Method | Type      | Amount | Successful |
      | 3  | PayPalFlow     | Authorize | $13.00 | No         |
    And I should not see "Transaction Capture Button"
