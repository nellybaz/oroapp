@ticket-BB-10029
@fixture-OroFlatRateShippingBundle:FlatRateIntegration.yml
@fixture-OroPaymentTermBundle:PaymentTermIntegration.yml
@fixture-OroCheckoutBundle:Checkout.yml
@fixture-OroCheckoutBundle:SmallInventoryLevel.yml
@community-edition-only

Feature: Single Page Checkout From Shopping List Quantity Errors
  In order to to create order from Shopping List on front store
  As a buyer
  I want to start checkout from Shopping List view page and view quantity validation errors before submit order

  Scenario: Enable Single Page Checkout Workflow
    Given There is USD currency in the system configuration
    And I login as administrator
    And go to System/Workflows
    When I click "Activate" on row "Single Page Checkout" in grid
    And I click "Activate"
    Then I should see "Workflow activated" flash message

  Scenario: Create order from Shopping List 1
    Given AmandaRCole@example.org customer user has Buyer role
    And I signed in as AmandaRCole@example.org on the store frontend
    When I open page with shopping list List 1
    And I click "Create Order"
    Then I should see "There is not enough quantity for this product"

    When I select "Fifth avenue, 10115 Berlin, Germany" from "Select Billing Address"
    And I select "Fifth avenue, 10115 Berlin, Germany" from "Select Shipping Address"
    And I check "Flat Rate" on the checkout page
    And I check "Payment Terms" on the checkout page
    And I click "Submit Order"
    Then I should see "There was an error while processing the order"
    And I should see "There is not enough quantity for this product"
