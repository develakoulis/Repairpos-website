<?php
// Shared content for the workflow pages and the guide index.
$repairGuides = [
  'book-in' => [
    'label'=>'Book in', 'title'=>'Book in a repair', 'group'=>'Booking to collection',
    'intro'=>'Create an order for the customer and record what needs doing to each item.',
    'image'=>'overview-create.webp', 'screen'=>'Create Sale · Store Order',
    'alt'=>'Sample RepairPOS store order with a customer, two physical items, repair services, workers, prices and a finish date',
    'steps'=>[
      ['title'=>'Open Create Sale and choose Store Order', 'text'=>'Open Create Sale and choose Store Order. Check the staff name and order number. Select Quote or Urgent if needed.', 'image'=>'/assets/images/app/steps/book-in-1.webp', 'screen'=>'Open Create Sale and choose Store Order', 'alt'=>'RepairPOS demo: Open Create Sale and choose Store Order', 'width'=>1364, 'height'=>228],
      ['title'=>'Search for the customer', 'text'=>'Choose Search Customer. Search by name, email or phone, check the details and choose Add.', 'image'=>'/assets/images/app/steps/book-in-2.webp', 'screen'=>'Search for an existing customer and choose Add', 'alt'=>'RepairPOS demo: Search for an existing customer and choose Add', 'width'=>1048, 'height'=>387],
      ['title'=>'Add a new customer if needed', 'text'=>'If the customer isn’t listed, choose New Customer. Enter their name, mobile and email, check notification preferences, then choose Add customer.', 'image'=>'/assets/images/app/steps/book-in-3.webp', 'screen'=>'Use New Customer when no existing record matches', 'alt'=>'RepairPOS demo: Use New Customer when no existing record matches', 'width'=>1048, 'height'=>732],
      ['title'=>'Set the finish date and notes', 'text'=>'Choose Finish Date and enter the agreed date and time. Store Orders need this before saving or payment. Add notes for the whole order here.', 'image'=>'/assets/images/app/steps/book-in-4.webp', 'screen'=>'Choose the required finish date, time and order notes', 'alt'=>'RepairPOS demo: Choose the required finish date, time and order notes', 'width'=>1364, 'height'=>483],
      ['title'=>'Add each physical item', 'text'=>'Choose Add New Item. Record the colour, brand, type and condition, and add before photos. Choose Add item and repeat for each item left with you.', 'image'=>'/assets/images/app/steps/book-in-5.webp', 'screen'=>'Add the physical item, condition and before photos', 'alt'=>'RepairPOS demo: Add the physical item, condition and before photos', 'width'=>1048, 'height'=>897],
      ['title'=>'Add the repair services', 'text'=>'Choose Add Services or Parts on the item. Find the agreed service and choose Add.', 'image'=>'/assets/images/app/steps/book-in-6.webp', 'screen'=>'Search for the repair service and add it to the item', 'alt'=>'RepairPOS demo: Search for the repair service and add it to the item', 'width'=>1048, 'height'=>451],
      ['title'=>'Add the parts and materials', 'text'=>'Use Add Services or Parts to find the part. Check stock and price, then add it to the item being repaired.', 'image'=>'/assets/images/app/steps/book-in-7.webp', 'screen'=>'Find a repair part and add it to the correct item', 'alt'=>'RepairPOS demo: Find a repair part and add it to the correct item', 'width'=>1048, 'height'=>387],
      ['title'=>'Check workers, quantities and prices', 'text'=>'Assign a worker and add instructions to each service. Check quantities, prices, the total and any discount.', 'image'=>'/assets/images/app/steps/book-in-8.webp', 'screen'=>'Check workers, instructions, quantities and prices', 'alt'=>'RepairPOS demo: Check workers, instructions, quantities and prices', 'width'=>1398, 'height'=>327],
      ['title'=>'Choose the quote and payment option', 'text'=>'Choose Create Quote for an estimate or Take Payment to continue. Take the full amount, a deposit or a custom amount. For payment later, choose No Payment, then Create Ticket.', 'image'=>'/assets/images/app/steps/book-in-9.webp', 'screen'=>'Choose No Payment and Create Ticket when payment is due later', 'alt'=>'RepairPOS demo: Choose No Payment and Create Ticket when payment is due later', 'width'=>1048, 'height'=>479],
      ['title'=>'Save the order and provide the ticket', 'text'=>'Finish the payment or No Payment steps. When the order is confirmed, check its number and use Print Docket for the ticket. Choose any receipt or email options needed.', 'image'=>'/assets/images/app/steps/book-in-10.webp', 'screen'=>'Save the new order and choose receipt or docket options', 'alt'=>'RepairPOS demo: Save the new order and choose receipt or docket options', 'width'=>1048, 'height'=>380]
    ],
    'example'=>'Alex leaves a pair of heels for a $70 sole replacement and a bag for a $40 handle repair. Both items belong to order 10421, with a total of $110.',
    'note'=>'Keep one record for each physical item. The customer order groups the items; it does not replace their individual repair records.',
    'related'=>['quotes-and-payments','item-tracking','customer-management']
  ],
  'quotes-and-payments' => [
    'label'=>'Quotes and payments', 'title'=>'Quotes, deposits and payments', 'group'=>'Booking to collection',
    'intro'=>'Quote for the repairs, take a deposit and see what’s left to pay.',
    'image'=>'overview-payment.webp', 'screen'=>'Payment · Deposit example',
    'alt'=>'RepairPOS payment example showing a $30 deposit on a $110 order and an $80 remaining balance',
    'steps'=>[
      ['title'=>'Check the quote', 'text'=>'Check each item’s services and prices. Choose Create Quote if the customer needs an estimate before agreeing to the work.', 'image'=>'/assets/images/app/steps/quotes-and-payments-1.webp', 'screen'=>'Review the repair prices and Create Quote', 'alt'=>'RepairPOS demo: Review the repair prices and Create Quote', 'width'=>1434, 'height'=>791],
      ['title'=>'Choose how much to take', 'text'=>'Choose Take Payment on a new order or Update Payment on a saved order. Select Full Payment, 50% Deposit or a custom amount.', 'image'=>'/assets/images/app/steps/quotes-and-payments-2.webp', 'screen'=>'Choose full payment, a deposit or a custom amount', 'alt'=>'RepairPOS demo: Choose full payment, a deposit or a custom amount', 'width'=>695, 'height'=>232],
      ['title'=>'Choose the payment method', 'text'=>'Select cash, card or another listed method. For card payments, follow the instructions for your connected terminal.', 'image'=>'/assets/images/app/steps/quotes-and-payments-3.webp', 'screen'=>'Select Cash and confirm the transaction', 'alt'=>'RepairPOS demo: Select Cash and confirm the transaction', 'width'=>1068, 'height'=>450],
      ['title'=>'Confirm the recorded balance', 'text'=>'Check that the payment is recorded and the remaining balance is correct. Use Receipt or Invoice for a copy. For refunds, choose Refund and check the amount and method.', 'image'=>'/assets/images/app/steps/quotes-and-payments-4.webp', 'screen'=>'Check the recorded payment and outstanding balance', 'alt'=>'RepairPOS demo: Check the recorded payment and outstanding balance', 'width'=>1424, 'height'=>197]
    ],
    'example'=>'The repair total is $110. A $30 deposit leaves $80 outstanding. The balance can be paid when the customer collects.',
    'note'=>'A recorded payment and a completed repair are separate things. Taking a deposit does not mark the item’s repair work complete.',
    'extra'=>[
      ['id'=>'receipts-and-refunds','title'=>'Receipts and refunds','text'=>'Use the order’s Receipt or Invoice controls to provide a copy. For a refund, open the saved order and use Refund; review the amount and payment method before confirming. Cancelling a repair and refunding a payment are different actions.']
    ],
    'related'=>['book-in','collection-and-finalisation','customer-updates']
  ],
  'item-tracking' => [
    'label'=>'Item tracking', 'title'=>'Track individual items', 'group'=>'Booking to collection',
    'intro'=>'Check the work, status and location of each item on an order.',
    'image'=>'overview-items.webp', 'screen'=>'Two items · Different repair stages',
    'alt'=>'Heels shown Ready on the Ready Shelf and a bag shown Working in the Leather Workshop on the same RepairPOS order',
    'steps'=>[
      ['title'=>'Open the customer order', 'text'=>'Find the order and the item you’re working on. Check its description and services before changing anything.', 'image'=>'/assets/images/app/steps/item-tracking-1.webp', 'screen'=>'Find the order and the correct physical item', 'alt'=>'RepairPOS demo: Find the order and the correct physical item', 'width'=>1404, 'height'=>1047],
      ['title'=>'Check the item’s status and location', 'text'=>'Check the item’s status and location. Update them as it moves through the shop; other items on the order can be at different stages.', 'image'=>'/assets/images/app/steps/item-tracking-2.webp', 'screen'=>'Check each item’s status and location', 'alt'=>'RepairPOS demo: Check each item’s status and location', 'width'=>1404, 'height'=>566],
      ['title'=>'Assign and complete the services', 'text'=>'Check who is assigned to each service and mark it complete when the work is done.', 'image'=>'/assets/images/app/steps/item-tracking-3.webp', 'screen'=>'Check the assigned worker and service completion', 'alt'=>'RepairPOS demo: Check the assigned worker and service completion', 'width'=>1368, 'height'=>327],
      ['title'=>'Choose the right QR code', 'text'=>'Scan the item QR in Job Flow to handle the item. To complete a service in the worker screen, scan its service job QR.', 'image'=>'/assets/images/app/steps/item-tracking-4.webp', 'screen'=>'Job Flow: scan the item QR or enter the order number', 'alt'=>'RepairPOS demo: Job Flow: scan the item QR or enter the order number', 'width'=>1440, 'height'=>574]
    ],
    'example'=>'Jamie’s sole replacement is ready on the Ready Shelf. Sam is still repairing the bag in the Leather Workshop. Both are on order 10421.',
    'note'=>'Completing one service does not automatically complete every item or the whole order. Review the remaining work before confirming collection readiness.',
    'related'=>['repair-photos','staff-and-workshop','complete-repairs']
  ],
  'repair-photos' => [
    'label'=>'Repair photos', 'title'=>'Add repair photos', 'group'=>'Booking to collection',
    'intro'=>'Photograph the item when it arrives and after the repair.',
    'image'=>'overview-photos.webp', 'screen'=>'Item photos · Before and after example',
    'alt'=>'Illustrative before and after repair photos for black leather heels, with item condition notes',
    'steps'=>[
      ['title'=>'Select the correct item', 'text'=>'Open the order’s Photos tab and find the item. Each item has its own photo gallery.', 'image'=>'/assets/images/app/steps/repair-photos-1.webp', 'screen'=>'Find the item in the Photos view', 'alt'=>'RepairPOS demo: Find the item in the Photos view', 'width'=>1440, 'height'=>985],
      ['title'=>'Record the arrival condition', 'text'=>'Add before photos of the item and the repair area. Note any existing wear or damage.', 'image'=>'/assets/images/app/steps/repair-photos-2.webp', 'screen'=>'Add before photos and record the arrival condition', 'alt'=>'RepairPOS demo: Add before photos and record the arrival condition', 'width'=>1008, 'height'=>882],
      ['title'=>'Record the finished work', 'text'=>'Add after photos to the same item. Show the repaired area so you can compare it with the before photos.', 'image'=>'/assets/images/app/steps/repair-photos-3.webp', 'screen'=>'Add after photos for the finished repair', 'alt'=>'RepairPOS demo: Add after photos for the finished repair', 'width'=>1008, 'height'=>882],
      ['title'=>'Review the saved photos', 'text'=>'Check the photos are saved against the right item, in the before or after gallery as intended.', 'image'=>'/assets/images/app/steps/repair-photos-4.webp', 'screen'=>'Review the item and its saved repair photos', 'alt'=>'RepairPOS demo: Review the item and its saved repair photos', 'width'=>1008, 'height'=>882]
    ],
    'example'=>'The heels’ worn soles and their repaired finish stay with the heels. The bag has its own record and photos.',
    'note'=>'The preview uses illustrative repair photographs. In the app, keep each item’s actual photos and condition notes together.',
    'related'=>['book-in','item-tracking','complete-repairs']
  ],
  'complete-repairs' => [
    'label'=>'Complete the repair', 'title'=>'Complete repairs for collection', 'group'=>'Booking to collection',
    'intro'=>'Check the finished work, record where it’s stored and send a collection message.',
    'image'=>'overview-complete.webp', 'screen'=>'Job Flow · Collection review',
    'alt'=>'RepairPOS Job Flow collection review showing two completed services, workers, storage A12 and notification options',
    'steps'=>[
      ['title'=>'Review the repair work', 'text'=>'Check the services, assigned workers and repair photos. Finish any outstanding work before marking the order ready.', 'image'=>'/assets/images/app/steps/complete-repairs-1.webp', 'screen'=>'Review the completed services and their workers', 'alt'=>'RepairPOS demo: Review the completed services and their workers', 'width'=>988, 'height'=>500],
      ['title'=>'Open the collection review in Job Flow', 'text'=>'Scan the item QR in Job Flow and follow the review steps. Confirm that the customer will collect in store.', 'image'=>'/assets/images/app/steps/complete-repairs-2.webp', 'screen'=>'Confirm that the customer is collecting in store', 'alt'=>'RepairPOS demo: Confirm that the customer is collecting in store', 'width'=>988, 'height'=>897],
      ['title'=>'Choose where the order is stored', 'text'=>'Select where you’ve put the finished items so staff can find them at collection.', 'image'=>'/assets/images/app/steps/complete-repairs-3.webp', 'screen'=>'Choose the finished order’s storage location', 'alt'=>'RepairPOS demo: Choose the finished order’s storage location', 'width'=>940, 'height'=>405],
      ['title'=>'Choose notifications and update', 'text'=>'Choose whether to send an SMS, an email or both. Confirm the update, then check the saved status and location.', 'image'=>'/assets/images/app/steps/complete-repairs-4.webp', 'screen'=>'Choose notifications and select Update Order', 'alt'=>'RepairPOS demo: Choose notifications and select Update Order', 'width'=>988, 'height'=>249]
    ],
    'example'=>'Both repairs have been completed by their workers. Storage A12 is selected before confirming the order is ready for collection.',
    'note'=>'Complete means the repair is ready. It does not mean the customer has paid the remaining balance or collected the items.',
    'related'=>['item-tracking','customer-updates','collection-and-finalisation']
  ],
  'collection-and-finalisation' => [
    'label'=>'Collect and finalise', 'title'=>'Collect and finalise an order', 'group'=>'Booking to collection',
    'intro'=>'Find the items, collect any balance and close the order.',
    'image'=>'overview-final-payment.webp', 'screen'=>'Payment · Remaining balance example',
    'alt'=>'RepairPOS final payment example showing the remaining $80 payment and zero balance on a $110 repair order',
    'steps'=>[
      ['title'=>'Find the order and its items', 'text'=>'Search by customer or order number. Check the storage location and collect the items being returned.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-1.webp', 'screen'=>'Find the order and its collection location', 'alt'=>'RepairPOS demo: Find the order and its collection location', 'width'=>1364, 'height'=>358],
      ['title'=>'Choose Finalise Order', 'text'=>'Choose Finalise Order. If money is still owed, the payment screen opens. Otherwise, confirm finalisation when asked.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-2.webp', 'screen'=>'Use Finalise Order to start collection payment', 'alt'=>'RepairPOS demo: Use Finalise Order to start collection payment', 'width'=>1424, 'height'=>197],
      ['title'=>'Settle any remaining balance', 'text'=>'Take the remaining payment using the customer’s chosen method. Check it’s confirmed and the balance is settled.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-3.webp', 'screen'=>'Pay the remaining balance and confirm it is settled', 'alt'=>'RepairPOS demo: Pay the remaining balance and confirm it is settled', 'width'=>1068, 'height'=>450],
      ['title'=>'Provide the receipt and hand over', 'text'=>'Finish finalising the order. Print or email the receipt and return the items to the customer.', 'image'=>'/assets/images/app/steps/collection-and-finalisation-4.webp', 'screen'=>'Choose the receipt options after finalisation', 'alt'=>'RepairPOS demo: Choose the receipt options after finalisation', 'width'=>1048, 'height'=>380]
    ],
    'example'=>'The total was $110 and the deposit was $30. The customer pays the remaining $80 at collection, leaving a $0 balance.',
    'note'=>'Review the payment result before handing back the repair. A terminal payment in progress is not the same as a confirmed, saved payment.',
    'related'=>['quotes-and-payments','complete-repairs','customer-management']
  ],
  'customer-management' => [
    'label'=>'Customers', 'title'=>'Manage customers and repair history', 'group'=>'Everyday tools',
    'intro'=>'Find customer details and look up their previous repairs.',
    'image'=>'guide-customers.webp', 'screen'=>'Client management · Sample customer list',
    'alt'=>'Synthetic RepairPOS customer list showing names, contact details and customer record controls',
    'steps'=>[
      ['title'=>'Find an existing customer', 'text'=>'Search by customer name or contact details first. Check the match before adding their repair.', 'image'=>'/assets/images/app/steps/customer-management-1.webp', 'screen'=>'Search the customer list before creating a new record', 'alt'=>'RepairPOS demo: Search the customer list before creating a new record', 'width'=>1424, 'height'=>327],
      ['title'=>'Add or update the details', 'text'=>'Choose Add Customer for someone new, or open an existing record to edit it. Check the email and mobile used for updates.', 'image'=>'/assets/images/app/steps/customer-management-2.webp', 'screen'=>'Add the customer’s name and contact details', 'alt'=>'RepairPOS demo: Add the customer’s name and contact details', 'width'=>1048, 'height'=>732],
      ['title'=>'Review their previous work', 'text'=>'Open the customer’s record to view earlier orders. Select the item or service you need to check.', 'image'=>'/assets/images/app/steps/customer-management-3.webp', 'screen'=>'Review the customer’s earlier orders and repair history', 'alt'=>'RepairPOS demo: Review the customer’s earlier orders and repair history', 'width'=>1356, 'height'=>227],
      ['title'=>'Use the customer on the next order', 'text'=>'Choose the existing customer when booking their next repair so their orders stay together.', 'image'=>'/assets/images/app/steps/customer-management-4.webp', 'screen'=>'Select the existing customer on the next booking', 'alt'=>'RepairPOS demo: Select the existing customer on the next booking', 'width'=>1139, 'height'=>161]
    ],
    'example'=>'Alex Taylor’s two current items belong to the same customer record, making them easier to find together.',
    'note'=>'Avoid duplicate customer records. Confirm the contact details before sending a quote, receipt or collection update.',
    'related'=>['book-in','customer-updates','collection-and-finalisation']
  ],
  'products-and-stock' => [
    'label'=>'Products and stock', 'title'=>'Manage services, products and stock', 'group'=>'Everyday tools',
    'intro'=>'Set up services, retail products and repair parts in your catalogue.',
    'image'=>'guide-products.webp', 'screen'=>'Product management · Sample catalogue',
    'alt'=>'RepairPOS catalogue preview listing two repair services, leather care cream and replacement heel parts with stock and prices',
    'steps'=>[
      ['title'=>'Find the catalogue entry', 'text'=>'Open Product management and find the entry. Check its description, category, price and type.', 'image'=>'/assets/images/app/steps/products-and-stock-1.webp', 'screen'=>'Search the catalogue for a service, product or part', 'alt'=>'RepairPOS demo: Search the catalogue for a service, product or part', 'width'=>1424, 'height'=>327],
      ['title'=>'Add or edit an entry', 'text'=>'Choose Add Product for a new entry, or edit an existing one. Select the type: service, product or part.', 'image'=>'/assets/images/app/steps/products-and-stock-2.webp', 'screen'=>'Set the catalogue type, price and stock quantity', 'alt'=>'RepairPOS demo: Set the catalogue type, price and stock quantity', 'width'=>1048, 'height'=>692],
      ['title'=>'Check physical stock', 'text'=>'Check the stock quantity for products and parts. Services don’t have physical stock.', 'image'=>'/assets/images/app/steps/products-and-stock-3.webp', 'screen'=>'Check stock for physical products and repair parts', 'alt'=>'RepairPOS demo: Check stock for physical products and repair parts', 'width'=>1404, 'height'=>330],
      ['title'=>'Use it on the order', 'text'=>'Add the service to the repair item, or add the product being sold. Check the price before taking payment.', 'image'=>'/assets/images/app/steps/products-and-stock-4.webp', 'screen'=>'Use Search Products when adding work or products to the order', 'alt'=>'RepairPOS demo: Use Search Products when adding work or products to the order', 'width'=>1434, 'height'=>641]
    ],
    'example'=>'Sole replacement is a service. Leather care cream is a product. Replacement heel blocks are repair parts.',
    'note'=>'Customer-owned items are different from your stock. Track the customer’s heels as a repair item, and the materials used through the catalogue.',
    'related'=>['book-in','item-tracking','reports']
  ],
  'staff-and-workshop' => [
    'label'=>'Staff and workshop', 'title'=>'Assign work to the team', 'group'=>'Everyday tools',
    'intro'=>'Assign repairs to workers and record where the items are kept.',
    'image'=>'overview-items.webp', 'screen'=>'Services · Worker assignments',
    'alt'=>'Two RepairPOS repair services assigned to different workers, with separate item statuses and locations',
    'steps'=>[
      ['title'=>'Check the worker list', 'text'=>'Open Worker management to add or update the people carrying out repairs.', 'image'=>'/assets/images/app/steps/staff-and-workshop-1.webp', 'screen'=>'Review the worker list', 'alt'=>'RepairPOS demo: Review the worker list', 'width'=>1376, 'height'=>321],
      ['title'=>'Assign the service', 'text'=>'Select a worker for each repair service. Services on the same order can go to different people.', 'image'=>'/assets/images/app/steps/staff-and-workshop-2.webp', 'screen'=>'Assign the repair service to the appropriate worker', 'alt'=>'RepairPOS demo: Assign the repair service to the appropriate worker', 'width'=>1368, 'height'=>263],
      ['title'=>'Keep the item location current', 'text'=>'Update the item’s location when it moves to another bench, department or storage area.', 'image'=>'/assets/images/app/steps/staff-and-workshop-3.webp', 'screen'=>'Keep the item’s workshop or storage location current', 'alt'=>'RepairPOS demo: Keep the item’s workshop or storage location current', 'width'=>1404, 'height'=>566],
      ['title'=>'Record finished work', 'text'=>'Mark each service complete when it’s done. Check for unfinished work before making the order ready for collection.', 'image'=>'/assets/images/app/steps/staff-and-workshop-4.webp', 'screen'=>'Record service completion for the assigned worker', 'alt'=>'RepairPOS demo: Record service completion for the assigned worker', 'width'=>1368, 'height'=>327]
    ],
    'example'=>'Jamie handles the heels while Sam repairs the bag. Their work can progress independently on the same order.',
    'note'=>'Worker assignments and staff login access serve different purposes. Available controls depend on the account being used.',
    'related'=>['item-tracking','complete-repairs','reports']
  ],
  'reports' => [
    'label'=>'Reports', 'title'=>'Review sales and workshop reports', 'group'=>'Everyday tools',
    'intro'=>'Check sales, payments and the work completed by your team.',
    'image'=>'guide-reports.webp', 'screen'=>'Weekly Sales Report · Sample figures',
    'alt'=>'Illustrative RepairPOS weekly report with synthetic sales totals, average active day, best day and daily chart',
    'steps'=>[
      ['title'=>'Open the report you need', 'text'=>'Open the sales report and choose the weekly, monthly or other view you need.', 'image'=>'/assets/images/app/steps/reports-1.webp', 'screen'=>'Open the sales report for an overview', 'alt'=>'RepairPOS demo: Open the sales report for an overview', 'width'=>1424, 'height'=>624],
      ['title'=>'Check the period and measure', 'text'=>'Check the date range and labels before comparing figures. Sales totals, payments received and worker activity show different things.', 'image'=>'/assets/images/app/steps/reports-2.webp', 'screen'=>'Check the date range before reviewing or exporting', 'alt'=>'RepairPOS demo: Check the date range before reviewing or exporting', 'width'=>946, 'height'=>266],
      ['title'=>'Review cash and staff activity', 'text'=>'Choose the cash, sales, worker or shop-assistant report. Use the orders and payments to check any figures you need to investigate.', 'image'=>'/assets/images/app/steps/reports-3.webp', 'screen'=>'Choose the cash or sales report you need', 'alt'=>'RepairPOS demo: Choose the cash or sales report you need', 'width'=>946, 'height'=>345],
      ['title'=>'Print or export where offered', 'text'=>'Select the period and use the print or export options shown to save a copy.', 'image'=>'/assets/images/app/steps/reports-4.webp', 'screen'=>'Choose the sales, worker or shop-assistant export', 'alt'=>'RepairPOS demo: Choose the sales, worker or shop-assistant export', 'width'=>946, 'height'=>266]
    ],
    'example'=>'The sample weekly preview shows $1,200 in activity across seven days. These are demonstration figures.',
    'note'=>'Confirm the date range and the meaning of each total. An order’s repair completion and its payment timing may be different.',
    'related'=>['quotes-and-payments','staff-and-workshop','products-and-stock']
  ],
  'customer-updates' => [
    'label'=>'Email and SMS', 'title'=>'Custom email and SMS communications', 'group'=>'Everyday tools',
    'intro'=>'Send custom email and SMS messages, quotes, receipts and collection updates from the customer’s order.',
    'image'=>'overview-complete.webp', 'screen'=>'Collection review · SMS and email choices',
    'alt'=>'RepairPOS collection review showing SMS and email notification choices alongside the completed repair items',
    'steps'=>[
      ['title'=>'Check the contact details', 'text'=>'Check the customer’s mobile number and email address before sending a message.', 'image'=>'/assets/images/app/steps/customer-updates-1.webp', 'screen'=>'Check the customer’s email and mobile number', 'alt'=>'RepairPOS demo: Check the customer’s email and mobile number', 'width'=>1316, 'height'=>228],
      ['title'=>'Write the email or SMS', 'text'=>'Choose the quote, invoice, receipt or SMS option on the order. Edit the email draft or SMS wording for the customer’s repair, then review the message before sending.', 'image'=>'/assets/images/app/steps/customer-updates-2.webp', 'screen'=>'Review the message before choosing Send SMS', 'alt'=>'RepairPOS demo: Review the message before choosing Send SMS', 'width'=>1048, 'height'=>288],
      ['title'=>'Review collection notifications', 'text'=>'At the collection review in Job Flow, choose whether to send an SMS, an email or both.', 'image'=>'/assets/images/app/steps/customer-updates-3.webp', 'screen'=>'Review collection SMS and email choices', 'alt'=>'RepairPOS demo: Review collection SMS and email choices', 'width'=>988, 'height'=>249],
      ['title'=>'Check the result', 'text'=>'Open Activity to check whether the message was sent. If it failed or isn’t confirmed, check the contact details and delivery feedback.', 'image'=>'/assets/images/app/steps/customer-updates-4.webp', 'screen'=>'Check Activity for sent, failed or unconfirmed updates', 'alt'=>'RepairPOS demo: Check Activity for sent, failed or unconfirmed updates', 'width'=>1008, 'height'=>453]
    ],
    'example'=>'Once Alex’s items are ready and stored at A12, the collection review offers SMS and email notification choices.',
    'note'=>'Selecting a notification option is different from confirming a message was sent. Check the result and the contact details.',
    'related'=>['customer-management','complete-repairs','quotes-and-payments']
  ],
  'parts-and-materials' => [
    'label'=>'Parts and materials', 'title'=>'Use parts and materials in repairs', 'group'=>'Everyday tools',
    'intro'=>'Add the parts used on a repair and check their quantity, price and stock.',
    'steps'=>[
      ['title'=>'Create or find the part', 'text'=>'Open Product management and find the part, or choose Add Product. Set the type to Part, enter its code, description, stock and prices, then save.', 'image'=>'/assets/images/app/steps/parts-and-materials-1.webp', 'screen'=>'Create a catalogue entry with type Part', 'alt'=>'RepairPOS demo: Create a catalogue entry with type Part', 'width'=>1048, 'height'=>692],
      ['title'=>'Check stock and price', 'text'=>'Find the part and check its stock and selling price. Parts are the components or materials used; services are the work you charge for.', 'image'=>'/assets/images/app/steps/parts-and-materials-2.webp', 'screen'=>'Check the repair part’s stock and selling price', 'alt'=>'RepairPOS demo: Check the repair part’s stock and selling price', 'width'=>1424, 'height'=>327],
      ['title'=>'Add it to the repair item', 'text'=>'Find the item on the order and choose Add Services or Parts. Search for the part, then choose Add.', 'image'=>'/assets/images/app/steps/parts-and-materials-3.webp', 'screen'=>'Search for the part from Add Services or Parts', 'alt'=>'RepairPOS demo: Search for the part from Add Services or Parts', 'width'=>1048, 'height'=>387],
      ['title'=>'Review quantity and the order total', 'text'=>'Set the quantity and check the part’s price alongside labour. Save through the payment or update steps, then check the order total and stock.', 'image'=>'/assets/images/app/steps/parts-and-materials-4.webp', 'screen'=>'Review the part quantity and line price on the repair item', 'alt'=>'RepairPOS demo: Review the part quantity and line price on the repair item', 'width'=>1398, 'height'=>327]
    ]
  ]
];
