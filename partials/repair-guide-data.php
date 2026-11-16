<?php
// Shared content for the workflow pages and the guide index.
$repairGuides = [
  'book-in' => [
    'label'=>'Book in', 'title'=>'Book in a repair', 'group'=>'Store order flow',
    'intro'=>'Create a store order, add the customer’s items and record the work needed on each one.',
    'image'=>'overview-create.webp', 'screen'=>'Create Sale · Store Order',
    'alt'=>'Sample RepairPOS store order with a customer, two physical items, repair services, workers, prices and a finish date',
    'steps'=>[
      ['title'=>'Open Create Sale and choose Store Order', 'text'=>'Open Create Sale and choose Store Order for an item brought into the shop. Check the staff name and generated order number. Use the Quote or Urgent controls when appropriate.', 'image'=>'/assets/images/app/steps/book-in-1.webp', 'screen'=>'Open Create Sale and choose Store Order', 'alt'=>'RepairPOS demo: Open Create Sale and choose Store Order', 'width'=>1364, 'height'=>228],
      ['title'=>'Search for the customer', 'text'=>'Choose Search Customer and search by the customer’s name, email or phone. Check the matching record and choose Add to attach that customer to the order.', 'image'=>'/assets/images/app/steps/book-in-2.webp', 'screen'=>'Search for an existing customer and choose Add', 'alt'=>'RepairPOS demo: Search for an existing customer and choose Add', 'width'=>1048, 'height'=>387],
      ['title'=>'Add a new customer if needed', 'text'=>'If no existing record matches, choose New Customer. Enter the name, mobile and email, check the notification preferences, then choose Add customer. Avoid creating another record for an existing customer.', 'image'=>'/assets/images/app/steps/book-in-3.webp', 'screen'=>'Use New Customer when no existing record matches', 'alt'=>'RepairPOS demo: Use New Customer when no existing record matches', 'width'=>1048, 'height'=>732],
      ['title'=>'Set the finish date and notes', 'text'=>'Choose Finish Date and select the agreed date and time. A finish date is required for a Store Order before taking payment or saving. Add any notes that apply to the whole order.', 'image'=>'/assets/images/app/steps/book-in-4.webp', 'screen'=>'Choose the required finish date, time and order notes', 'alt'=>'RepairPOS demo: Choose the required finish date, time and order notes', 'width'=>1364, 'height'=>483],
      ['title'=>'Add each physical item', 'text'=>'Choose Add New Item. Enter the colour, brand, type and condition, and add before photos where needed. Choose Add item, then repeat for each physical item the customer leaves with you.', 'image'=>'/assets/images/app/steps/book-in-5.webp', 'screen'=>'Add the physical item, condition and before photos', 'alt'=>'RepairPOS demo: Add the physical item, condition and before photos', 'width'=>1048, 'height'=>897],
      ['title'=>'Add the repair services', 'text'=>'On the correct item, choose Add Services or Parts. Search for the agreed service and choose Add. Keep each service attached to the item it belongs to.', 'image'=>'/assets/images/app/steps/book-in-6.webp', 'screen'=>'Search for the repair service and add it to the item', 'alt'=>'RepairPOS demo: Search for the repair service and add it to the item', 'width'=>1048, 'height'=>451],
      ['title'=>'Add the parts and materials', 'text'=>'Use Add Services or Parts to find the required part. Check its stock and price before adding it to the correct item. Parts are catalogue stock used in the repair, not another customer-owned item.', 'image'=>'/assets/images/app/steps/book-in-7.webp', 'screen'=>'Find a repair part and add it to the correct item', 'alt'=>'RepairPOS demo: Find a repair part and add it to the correct item', 'width'=>1048, 'height'=>387],
      ['title'=>'Check workers, quantities and prices', 'text'=>'Assign a worker to each service and enter its instructions. Check service prices, part quantities and line prices. Review the order total and any discount before continuing.', 'image'=>'/assets/images/app/steps/book-in-8.webp', 'screen'=>'Check workers, instructions, quantities and prices', 'alt'=>'RepairPOS demo: Check workers, instructions, quantities and prices', 'width'=>1398, 'height'=>327],
      ['title'=>'Choose the quote and payment option', 'text'=>'Use Create Quote for an estimate or Take Payment to continue with the order. Choose a full payment, a deposit or a custom amount and the correct method. For payment later, select No Payment and use Create Ticket.', 'image'=>'/assets/images/app/steps/book-in-9.webp', 'screen'=>'Choose No Payment and Create Ticket when payment is due later', 'alt'=>'RepairPOS demo: Choose No Payment and Create Ticket when payment is due later', 'width'=>1048, 'height'=>479],
      ['title'=>'Save the order and provide the ticket', 'text'=>'Complete the chosen payment or No Payment flow and wait for the order-created confirmation. Check the saved order number, then choose Print Docket for the repair ticket and the receipt or email options you need.', 'image'=>'/assets/images/app/steps/book-in-10.webp', 'screen'=>'Save the new order and choose receipt or docket options', 'alt'=>'RepairPOS demo: Save the new order and choose receipt or docket options', 'width'=>1048, 'height'=>380]
    ],
    'example'=>'Alex leaves a pair of heels for a $70 sole replacement and a bag for a $40 handle repair. Both items belong to order 10421, with a total of $110.',
    'note'=>'Keep one record for each physical item. The customer order groups the items; it does not replace their individual repair records.',
    'related'=>['quotes-and-payments','item-tracking','customer-management']
  ],
  'quotes-and-payments' => [
    'label'=>'Quotes and payments', 'title'=>'Quotes, deposits and payments', 'group'=>'Store order flow',
    'intro'=>'Agree the repair price, record payments and keep the outstanding balance visible on the order.',
    'image'=>'overview-payment.webp', 'screen'=>'Payment · Deposit example',
    'alt'=>'RepairPOS payment example showing a $30 deposit on a $110 order and an $80 remaining balance',
    'steps'=>[
      ['title'=>'Check the quote', 'text'=>'Review the services and prices against each item. Use Create Quote when you are providing an estimate before the work goes ahead.', 'image'=>'/assets/images/app/steps/quotes-and-payments-1.webp', 'screen'=>'Review the repair prices and Create Quote', 'alt'=>'RepairPOS demo: Review the repair prices and Create Quote', 'width'=>1434, 'height'=>791],
      ['title'=>'Choose how much to take', 'text'=>'Open Take Payment on a new order or Update Payment on a saved order. Use Full Payment, 50% Deposit or enter a custom amount.', 'image'=>'/assets/images/app/steps/quotes-and-payments-2.webp', 'screen'=>'Choose full payment, a deposit or a custom amount', 'alt'=>'RepairPOS demo: Choose full payment, a deposit or a custom amount', 'width'=>695, 'height'=>232],
      ['title'=>'Choose the payment method', 'text'=>'Select cash, card or another available method. Follow the payment screen’s instructions; card payments use the configured terminal flow.', 'image'=>'/assets/images/app/steps/quotes-and-payments-3.webp', 'screen'=>'Select Cash and confirm the transaction', 'alt'=>'RepairPOS demo: Select Cash and confirm the transaction', 'width'=>1068, 'height'=>450],
      ['title'=>'Confirm the recorded balance', 'text'=>'After the payment has been confirmed, check the amount recorded and the remaining balance on the order. Use Receipt or Invoice to provide a copy. For a payment refund, use Refund on the saved order and review the amount and method before confirming.', 'image'=>'/assets/images/app/steps/quotes-and-payments-4.webp', 'screen'=>'Check the recorded payment and outstanding balance', 'alt'=>'RepairPOS demo: Check the recorded payment and outstanding balance', 'width'=>1424, 'height'=>197]
    ],
    'example'=>'The repair total is $110. A $30 deposit leaves $80 outstanding. The balance can be paid when the customer collects.',
    'note'=>'A recorded payment and a completed repair are separate things. Taking a deposit does not mark the item’s repair work complete.',
    'extra'=>[
      ['id'=>'receipts-and-refunds','title'=>'Receipts and refunds','text'=>'Use the order’s Receipt or Invoice controls to provide a copy. For a refund, open the saved order and use Refund; review the amount and payment method before confirming. Cancelling a repair and refunding a payment are different actions.']
    ],
    'related'=>['book-in','collection-and-finalisation','customer-updates']
  ],
  'item-tracking' => [
    'label'=>'Item tracking', 'title'=>'Track individual items', 'group'=>'Store order flow',
    'intro'=>'See the status, location and repair work for each item, even when several items share one customer order.',
    'image'=>'overview-items.webp', 'screen'=>'Two items · Different repair stages',
    'alt'=>'Heels shown Ready on the Ready Shelf and a bag shown Working in the Leather Workshop on the same RepairPOS order',
    'steps'=>[
      ['title'=>'Open the customer order', 'text'=>'Find the order and locate the physical item you are working on. Check its description and attached services before making an update.', 'image'=>'/assets/images/app/steps/item-tracking-1.webp', 'screen'=>'Find the order and the correct physical item', 'alt'=>'RepairPOS demo: Find the order and the correct physical item', 'width'=>1404, 'height'=>1047],
      ['title'=>'Check the item’s status and location', 'text'=>'Use the item’s own status and location controls to keep its progress clear. One item can be ready while another on the same order is still in the workshop.', 'image'=>'/assets/images/app/steps/item-tracking-2.webp', 'screen'=>'Check each item’s status and location', 'alt'=>'RepairPOS demo: Check each item’s status and location', 'width'=>1404, 'height'=>566],
      ['title'=>'Assign and complete the services', 'text'=>'Check the worker assigned to each service. Mark the relevant work complete when that service has been finished.', 'image'=>'/assets/images/app/steps/item-tracking-3.webp', 'screen'=>'Check the assigned worker and service completion', 'alt'=>'RepairPOS demo: Check the assigned worker and service completion', 'width'=>1368, 'height'=>327],
      ['title'=>'Use the correct QR workflow', 'text'=>'Job Flow uses the item QR to guide item handling. The worker interface uses service job QRs for completing individual services. Check that you are scanning the correct ticket.', 'image'=>'/assets/images/app/steps/item-tracking-4.webp', 'screen'=>'Job Flow: scan the item QR or enter the order number', 'alt'=>'RepairPOS demo: Job Flow: scan the item QR or enter the order number', 'width'=>1440, 'height'=>574]
    ],
    'example'=>'Jamie’s sole replacement is ready on the Ready Shelf. Sam is still repairing the bag in the Leather Workshop. Both are on order 10421.',
    'note'=>'Completing one service does not automatically complete every item or the whole order. Review the remaining work before confirming collection readiness.',
    'related'=>['repair-photos','staff-and-workshop','complete-repairs']
  ],
  'repair-photos' => [
    'label'=>'Repair photos', 'title'=>'Add repair photos', 'group'=>'Store order flow',
    'intro'=>'Keep the arrival condition and finished result attached to the physical item they belong to.',
    'image'=>'overview-photos.webp', 'screen'=>'Item photos · Before and after example',
    'alt'=>'Illustrative before and after repair photos for black leather heels, with item condition notes',
    'steps'=>[
      ['title'=>'Select the correct item', 'text'=>'Open the order’s Photos tab and find the item by its description. Keep photos of different items in their own item galleries.', 'image'=>'/assets/images/app/steps/repair-photos-1.webp', 'screen'=>'Find the item in the Photos view', 'alt'=>'RepairPOS demo: Find the item in the Photos view', 'width'=>1440, 'height'=>985],
      ['title'=>'Record the arrival condition', 'text'=>'Add before photos showing the item and the area needing repair. Record existing wear or damage in the condition notes.', 'image'=>'/assets/images/app/steps/repair-photos-2.webp', 'screen'=>'Add before photos and record the arrival condition', 'alt'=>'RepairPOS demo: Add before photos and record the arrival condition', 'width'=>1008, 'height'=>882],
      ['title'=>'Record the finished work', 'text'=>'Add after photos to the same item when its repairs are finished. Capture the repaired area clearly so the result can be compared with the arrival condition.', 'image'=>'/assets/images/app/steps/repair-photos-3.webp', 'screen'=>'Add after photos for the finished repair', 'alt'=>'RepairPOS demo: Add after photos for the finished repair', 'width'=>1008, 'height'=>882],
      ['title'=>'Review the saved photos', 'text'=>'Check that the images appear under the correct item and in the correct before or after gallery before moving on.', 'image'=>'/assets/images/app/steps/repair-photos-4.webp', 'screen'=>'Review the item and its saved repair photos', 'alt'=>'RepairPOS demo: Review the item and its saved repair photos', 'width'=>1008, 'height'=>882]
    ],
    'example'=>'The heels’ worn soles and their repaired finish stay with the heels. The bag has its own record and photos.',
    'note'=>'The preview uses illustrative repair photographs. In the app, keep each item’s actual photos and condition notes together.',
    'related'=>['book-in','item-tracking','complete-repairs']
  ],
  'complete-repairs' => [
    'label'=>'Complete the repair', 'title'=>'Complete repairs for collection', 'group'=>'Store order flow',
    'intro'=>'Review the finished work, choose a storage location and let the customer know their items are ready.',
    'image'=>'overview-complete.webp', 'screen'=>'Job Flow · Collection review',
    'alt'=>'RepairPOS Job Flow collection review showing two completed services, workers, storage A12 and notification options',
    'steps'=>[
      ['title'=>'Review the repair work', 'text'=>'Check the individual services, assigned workers and any required repair photos. Resolve unfinished work before confirming the order is ready.', 'image'=>'/assets/images/app/steps/complete-repairs-1.webp', 'screen'=>'Review the completed services and their workers', 'alt'=>'RepairPOS demo: Review the completed services and their workers', 'width'=>988, 'height'=>500],
      ['title'=>'Open the collection review in Job Flow', 'text'=>'Use the item QR in Job Flow and follow the current review step. Confirm that the customer is collecting the items in store.', 'image'=>'/assets/images/app/steps/complete-repairs-2.webp', 'screen'=>'Confirm that the customer is collecting in store', 'alt'=>'RepairPOS demo: Confirm that the customer is collecting in store', 'width'=>988, 'height'=>897],
      ['title'=>'Choose where the order is stored', 'text'=>'Select the storage location used for the finished items. This makes them easier to find when the customer returns.', 'image'=>'/assets/images/app/steps/complete-repairs-3.webp', 'screen'=>'Choose the finished order’s storage location', 'alt'=>'RepairPOS demo: Choose the finished order’s storage location', 'width'=>940, 'height'=>405],
      ['title'=>'Choose notifications and update', 'text'=>'Review the SMS and email choices, then confirm the order update. Check the saved status and location afterwards.', 'image'=>'/assets/images/app/steps/complete-repairs-4.webp', 'screen'=>'Choose notifications and select Update Order', 'alt'=>'RepairPOS demo: Choose notifications and select Update Order', 'width'=>988, 'height'=>249]
    ],
    'example'=>'Both repairs have been completed by their workers. Storage A12 is selected before confirming the order is ready for collection.',
    'note'=>'Complete means the repair is ready. It does not mean the customer has paid the remaining balance or collected the items.',
    'related'=>['item-tracking','customer-updates','collection-and-finalisation']
  ],
  'collection-and-finalisation' => [
    'label'=>'Collect and finalise', 'title'=>'Collect and finalise an order', 'group'=>'Store order flow',
    'intro'=>'Find the finished items, settle the remaining payment and close the customer order.',
    'image'=>'overview-final-payment.webp', 'screen'=>'Payment · Remaining balance example',
    'alt'=>'RepairPOS final payment example showing the remaining $80 payment and zero balance on a $110 repair order',
    'steps'=>[
      ['title'=>'Find the order and its items', 'text'=>'Look up the customer or order number. Check the recorded storage location and confirm the items being handed back.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-1.webp', 'screen'=>'Find the order and its collection location', 'alt'=>'RepairPOS demo: Find the order and its collection location', 'width'=>1364, 'height'=>358],
      ['title'=>'Choose Finalise Order', 'text'=>'Use Finalise Order on the saved order. If a balance remains, RepairPOS opens the payment screen; if the order is already settled, it asks you to confirm finalisation.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-2.webp', 'screen'=>'Use Finalise Order to start collection payment', 'alt'=>'RepairPOS demo: Use Finalise Order to start collection payment', 'width'=>1424, 'height'=>197],
      ['title'=>'Settle any remaining balance', 'text'=>'Complete the payment using the chosen method and check the result. For a normal store order paid at collection, confirm that nothing remains outstanding.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-3.webp', 'screen'=>'Pay the remaining balance and confirm it is settled', 'alt'=>'RepairPOS demo: Pay the remaining balance and confirm it is settled', 'width'=>1068, 'height'=>450],
      ['title'=>'Provide the receipt and hand over', 'text'=>'Complete finalisation and choose the receipt options offered. Print or email the receipt, then return the correct items to the customer.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-4.webp', 'screen'=>'Choose the receipt options after finalisation', 'alt'=>'RepairPOS demo: Choose the receipt options after finalisation', 'width'=>1048, 'height'=>380]
    ],
    'example'=>'The total was $110 and the deposit was $30. The customer pays the remaining $80 at collection, leaving a $0 balance.',
    'note'=>'Review the payment result before handing back the repair. A terminal payment in progress is not the same as a confirmed, saved payment.',
    'related'=>['quotes-and-payments','complete-repairs','customer-management']
  ],
  'customer-management' => [
    'label'=>'Customers', 'title'=>'Manage customers and repair history', 'group'=>'Everyday tools',
    'intro'=>'Find the right customer, keep their contact details current and look back at their repairs.',
    'image'=>'guide-customers.webp', 'screen'=>'Client management · Sample customer list',
    'alt'=>'Synthetic RepairPOS customer list showing names, contact details and customer record controls',
    'steps'=>[
      ['title'=>'Find an existing customer', 'text'=>'Search for the customer before creating another record. Check the name and contact details so a new repair is attached to the correct person.', 'image'=>'/assets/images/app/steps/customer-management-1.webp', 'screen'=>'Search the customer list before creating a new record', 'alt'=>'RepairPOS demo: Search the customer list before creating a new record', 'width'=>1424, 'height'=>327],
      ['title'=>'Add or update the details', 'text'=>'Use Add Customer for someone new. Open an existing customer to check or edit their details, especially the email address and mobile number used for updates.', 'image'=>'/assets/images/app/steps/customer-management-2.webp', 'screen'=>'Add the customer’s name and contact details', 'alt'=>'RepairPOS demo: Add the customer’s name and contact details', 'width'=>1048, 'height'=>732],
      ['title'=>'Review their previous work', 'text'=>'Open the customer record to review their orders and repair history. Check the relevant item and service rather than relying on a similar past repair.', 'image'=>'/assets/images/app/steps/customer-management-3.webp', 'screen'=>'Review the customer’s earlier orders and repair history', 'alt'=>'RepairPOS demo: Review the customer’s earlier orders and repair history', 'width'=>1356, 'height'=>227],
      ['title'=>'Use the customer on the next order', 'text'=>'Select the existing customer when booking in more work. This keeps their repair history together.', 'image'=>'/assets/images/app/steps/customer-management-4.webp', 'screen'=>'Select the existing customer on the next booking', 'alt'=>'RepairPOS demo: Select the existing customer on the next booking', 'width'=>1139, 'height'=>161]
    ],
    'example'=>'Alex Taylor’s two current items belong to the same customer record, making them easier to find together.',
    'note'=>'Avoid duplicate customer records. Confirm the contact details before sending a quote, receipt or collection update.',
    'related'=>['book-in','customer-updates','collection-and-finalisation']
  ],
  'products-and-stock' => [
    'label'=>'Products and stock', 'title'=>'Manage services, products and stock', 'group'=>'Everyday tools',
    'intro'=>'Keep repair services, retail products and repair parts organised in the catalogue.',
    'image'=>'guide-products.webp', 'screen'=>'Product management · Sample catalogue',
    'alt'=>'RepairPOS catalogue preview listing two repair services, leather care cream and replacement heel parts with stock and prices',
    'steps'=>[
      ['title'=>'Find the catalogue entry', 'text'=>'Open Product management and find the service, product or part. Check its description, category, price and type.', 'image'=>'/assets/images/app/steps/products-and-stock-1.webp', 'screen'=>'Search the catalogue for a service, product or part', 'alt'=>'RepairPOS demo: Search the catalogue for a service, product or part', 'width'=>1424, 'height'=>327],
      ['title'=>'Add or edit an entry', 'text'=>'Use Add Product for a new catalogue entry, or edit the existing one. Choose the appropriate type so a repair service is distinguished from a physical product or part.', 'image'=>'/assets/images/app/steps/products-and-stock-2.webp', 'screen'=>'Set the catalogue type, price and stock quantity', 'alt'=>'RepairPOS demo: Set the catalogue type, price and stock quantity', 'width'=>1048, 'height'=>692],
      ['title'=>'Check physical stock', 'text'=>'Review the stock quantity for products and parts. A service represents work being done, rather than a physical item on the shelf.', 'image'=>'/assets/images/app/steps/products-and-stock-3.webp', 'screen'=>'Check stock for physical products and repair parts', 'alt'=>'RepairPOS demo: Check stock for physical products and repair parts', 'width'=>1404, 'height'=>330],
      ['title'=>'Use it on the order', 'text'=>'Select the appropriate service for the customer’s repair item, or add the product being sold. Review the order price before taking payment.', 'image'=>'/assets/images/app/steps/products-and-stock-4.webp', 'screen'=>'Use Search Products when adding work or products to the order', 'alt'=>'RepairPOS demo: Use Search Products when adding work or products to the order', 'width'=>1434, 'height'=>641]
    ],
    'example'=>'Sole replacement is a service. Leather care cream is a product. Replacement heel blocks are repair parts.',
    'note'=>'Customer-owned items are different from your stock. Track the customer’s heels as a repair item, and the materials used through the catalogue.',
    'related'=>['book-in','item-tracking','reports']
  ],
  'staff-and-workshop' => [
    'label'=>'Staff and workshop', 'title'=>'Assign work to the team', 'group'=>'Everyday tools',
    'intro'=>'Make it clear who is doing each repair and where the item is moving next.',
    'image'=>'overview-items.webp', 'screen'=>'Services · Worker assignments',
    'alt'=>'Two RepairPOS repair services assigned to different workers, with separate item statuses and locations',
    'steps'=>[
      ['title'=>'Check the worker list', 'text'=>'Use Worker management to maintain the people who carry out repairs. A worker assignment identifies who is doing the service.', 'image'=>'/assets/images/app/steps/staff-and-workshop-1.webp', 'screen'=>'Review the worker list', 'alt'=>'RepairPOS demo: Review the worker list', 'width'=>1376, 'height'=>321],
      ['title'=>'Assign the service', 'text'=>'On the order, select the worker for each repair service. Different items or services can be assigned to different workers.', 'image'=>'/assets/images/app/steps/staff-and-workshop-2.webp', 'screen'=>'Assign the repair service to the appropriate worker', 'alt'=>'RepairPOS demo: Assign the repair service to the appropriate worker', 'width'=>1368, 'height'=>263],
      ['title'=>'Keep the item location current', 'text'=>'When the physical item moves to another department or storage area, update its location using the relevant tracking controls.', 'image'=>'/assets/images/app/steps/staff-and-workshop-3.webp', 'screen'=>'Keep the item’s workshop or storage location current', 'alt'=>'RepairPOS demo: Keep the item’s workshop or storage location current', 'width'=>1404, 'height'=>566],
      ['title'=>'Record finished work', 'text'=>'Mark the relevant service complete when it has been finished. Review outstanding services before moving the whole order towards collection.', 'image'=>'/assets/images/app/steps/staff-and-workshop-4.webp', 'screen'=>'Record service completion for the assigned worker', 'alt'=>'RepairPOS demo: Record service completion for the assigned worker', 'width'=>1368, 'height'=>327]
    ],
    'example'=>'Jamie handles the heels while Sam repairs the bag. Their work can progress independently on the same order.',
    'note'=>'Worker assignments and staff login access serve different purposes. Available controls depend on the account being used.',
    'related'=>['item-tracking','complete-repairs','reports']
  ],
  'reports' => [
    'label'=>'Reports', 'title'=>'Review sales and workshop reports', 'group'=>'Everyday tools',
    'intro'=>'Use reporting to review sales activity, money received and the work completed by your team.',
    'image'=>'guide-reports.webp', 'screen'=>'Weekly Sales Report · Sample figures',
    'alt'=>'Illustrative RepairPOS weekly report with synthetic sales totals, average active day, best day and daily chart',
    'steps'=>[
      ['title'=>'Open the report you need', 'text'=>'Use the sales report for an overview of business activity. Weekly, monthly and other report sections show different views of the figures.', 'image'=>'/assets/images/app/steps/reports-1.webp', 'screen'=>'Open the sales report for an overview', 'alt'=>'RepairPOS demo: Open the sales report for an overview', 'width'=>1424, 'height'=>624],
      ['title'=>'Check the period and measure', 'text'=>'Read the date range and report labels before comparing totals. Sales, payments and worker activity answer different questions.', 'image'=>'/assets/images/app/steps/reports-2.webp', 'screen'=>'Check the date range before reviewing or exporting', 'alt'=>'RepairPOS demo: Check the date range before reviewing or exporting', 'width'=>946, 'height'=>266],
      ['title'=>'Review cash and staff activity', 'text'=>'Use the cash, sales, worker or shop-assistant reports as appropriate. Compare the relevant report with the orders and payments behind it.', 'image'=>'/assets/images/app/steps/reports-3.webp', 'screen'=>'Choose the cash or sales report you need', 'alt'=>'RepairPOS demo: Choose the cash or sales report you need', 'width'=>946, 'height'=>345],
      ['title'=>'Print or export where offered', 'text'=>'Choose the period and use the available report or export controls when you need a copy for further review.', 'image'=>'/assets/images/app/steps/reports-4.webp', 'screen'=>'Choose the sales, worker or shop-assistant export', 'alt'=>'RepairPOS demo: Choose the sales, worker or shop-assistant export', 'width'=>946, 'height'=>266]
    ],
    'example'=>'The sample weekly preview shows $1,200 in activity across seven days. These are demonstration figures.',
    'note'=>'Confirm the date range and the meaning of each total. An order’s repair completion and its payment timing may be different.',
    'related'=>['quotes-and-payments','staff-and-workshop','products-and-stock']
  ],
  'customer-updates' => [
    'label'=>'Customer updates', 'title'=>'Keep customers updated', 'group'=>'Everyday tools',
    'intro'=>'Use the order’s communication controls to keep the customer informed about their repair.',
    'image'=>'overview-complete.webp', 'screen'=>'Collection review · SMS and email choices',
    'alt'=>'RepairPOS collection review showing SMS and email notification choices alongside the completed repair items',
    'steps'=>[
      ['title'=>'Check the contact details', 'text'=>'Confirm the customer’s mobile number and email address on the saved customer record before sending anything.', 'image'=>'/assets/images/app/steps/customer-updates-1.webp', 'screen'=>'Check the customer’s email and mobile number', 'alt'=>'RepairPOS demo: Check the customer’s email and mobile number', 'width'=>1316, 'height'=>228],
      ['title'=>'Choose the relevant update', 'text'=>'Use the order’s quote, invoice, receipt or SMS controls for the message you need. Keep the message relevant to that customer’s order.', 'image'=>'/assets/images/app/steps/customer-updates-2.webp', 'screen'=>'Review the message before choosing Send SMS', 'alt'=>'RepairPOS demo: Review the message before choosing Send SMS', 'width'=>1048, 'height'=>288],
      ['title'=>'Review collection notifications', 'text'=>'When completing the order for collection, check the SMS and email options in Job Flow. Choose the channels you intend to use before confirming.', 'image'=>'/assets/images/app/steps/customer-updates-3.webp', 'screen'=>'Review collection SMS and email choices', 'alt'=>'RepairPOS demo: Review collection SMS and email choices', 'width'=>988, 'height'=>249],
      ['title'=>'Check the result', 'text'=>'Open Activity on the order and read the message result or delivery feedback shown. Investigate a failed or unconfirmed update before assuming the customer has been notified.', 'image'=>'/assets/images/app/steps/customer-updates-4.webp', 'screen'=>'Check Activity for sent, failed or unconfirmed updates', 'alt'=>'RepairPOS demo: Check Activity for sent, failed or unconfirmed updates', 'width'=>1008, 'height'=>453]
    ],
    'example'=>'Once Alex’s items are ready and stored at A12, the collection review offers SMS and email notification choices.',
    'note'=>'Selecting a notification option is different from confirming a message was sent. Check the result and the contact details.',
    'related'=>['customer-management','complete-repairs','quotes-and-payments']
  ],
  'parts-and-materials' => [
    'label'=>'Parts and materials', 'title'=>'Use parts and materials in repairs', 'group'=>'Everyday tools',
    'intro'=>'Keep the parts used in a repair attached to the right item, with a clear quantity, price and stock record.',
    'steps'=>[
      ['title'=>'Create or find the part', 'text'=>'In Product management, find the existing part or choose Add Product. Set its type to Part, then enter its code, description, stock and prices. Save the catalogue entry.', 'image'=>'/assets/images/app/steps/parts-and-materials-1.webp', 'screen'=>'Create a catalogue entry with type Part', 'alt'=>'RepairPOS demo: Create a catalogue entry with type Part', 'width'=>1048, 'height'=>692],
      ['title'=>'Check stock and price', 'text'=>'Search for the part and check the available stock and selling price. A service is work you carry out; a part is a physical component or material used in that work.', 'image'=>'/assets/images/app/steps/parts-and-materials-2.webp', 'screen'=>'Check the repair part’s stock and selling price', 'alt'=>'RepairPOS demo: Check the repair part’s stock and selling price', 'width'=>1424, 'height'=>327],
      ['title'=>'Add it to the repair item', 'text'=>'Open the order and find the correct physical item. Choose Add Services or Parts, search for the part and choose Add. Keep parts for different customer items on their own item lines.', 'image'=>'/assets/images/app/steps/parts-and-materials-3.webp', 'screen'=>'Search for the part from Add Services or Parts', 'alt'=>'RepairPOS demo: Search for the part from Add Services or Parts', 'width'=>1048, 'height'=>387],
      ['title'=>'Review quantity and the order total', 'text'=>'Set the quantity required and check the part’s line price alongside the service charge. Save the order through the normal payment or update flow, then review its recorded totals and stock.', 'image'=>'/assets/images/app/steps/parts-and-materials-4.webp', 'screen'=>'Review the part quantity and line price on the repair item', 'alt'=>'RepairPOS demo: Review the part quantity and line price on the repair item', 'width'=>1398, 'height'=>327]
    ]
  ]
];
