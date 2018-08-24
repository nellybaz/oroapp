@ticket-BB-10029
@fixture-OroFlatRateShippingBundle:FlatRateIntegration.yml
@fixture-OroPaymentTermBundle:PaymentTermIntegration.yml
@fixture-OroCheckoutBundle:Checkout.yml
@fixture-OroCheckoutBundle:InventoryLevel.yml
@community-edition-only

Feature: Single Page Checkout From Shopping List
  In order to complete the checkout process without going back and forth to various pages
  As a Customer User
  I want to see all checkout information and be able to complete checkout on one page from "Shopping List"

  Scenario: Enable Single Page Checkout Workflow
    Given There is USD currency in the system configuration
    And I login as administrator
    And go to System/Workflows
    When I click "Activate" on row "Single Page Checkout" in grid
    And I click "Activate"
    Then I should see "Workflow activated" flash message

  Scenario: Create order from Shopping List 1 and verify quantity
    Given AmandaRCole@example.org customer user has Buyer role
    And I signed in as AmandaRCole@example.org on the store frontend
    When I open page with shopping list List 1
    And I scroll to top
    And I wait line items are initialized
    And I click "Create Order"
    Then Checkout "Order Summary Products Grid" should contain products:
      | 400-Watt Bulb Work Light | 5 | items |
    And I should see Checkout Totals with data:
      | Subtotal | $10.00 |

    When I open Order History page on the store frontend
    Then I should see following grid:
      | Step     | Started From | Items | Subtotal |
      | Checkout | List 1       | 1     | $10.00   |
    And I click "Check Out" on row "List 1" in grid "OpenOrdersGrid"

    When I click "Edit Order"
    And I wait line items are initialized
    And I type "10" in "Shopping List Line Item 1 Quantity"
    And I should see "Record has been successfully updated" flash message
    And I scroll to top
    And I click "Create Order"
    Then Checkout "Order Summary Products Grid" should contain products:
      | 400-Watt Bulb Work Light | 10 | items |
    And I should see Checkout Totals with data:
      | Subtotal | $20.00 |

    When I open Order History page on the store frontend
    Then I should see following grid:
      | Step     | Started From | Items | Subtotal |
      | Checkout | List 1       | 1     | $20.00   |
    And I click "Check Out" on row "List 1" in grid "OpenOrdersGrid"

  Scenario: Process checkout
    Given I select "Fifth avenue, 10115 Berlin, Germany" from "Select Billing Address"
    And I select "Fifth avenue, 10115 Berlin, Germany" from "Select Shipping Address"
    And I check "Flat Rate" on the checkout page
    And I check "Payment Terms" on the checkout page
    When I click "Submit Order"
    Then I see the "Thank You" page with "Thank You For Your Purchase!" title

    When I follow "click here to review"
    Then I should be on Order Frontend View page

  Scenario: Checking Order History grid with Open Orders
    Given I open Order History page on the store frontend
    Then there is no records in "OpenOrdersGrid"
    And I click "View" on row "1" in grid "PastOrdersGrid"
    Then I should be on Order Frontend View page
