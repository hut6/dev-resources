# WHMCS Workflow

As WHMCS will be used to bill domains, hosting, SSL certificates and Google Apps, we have to make sure that we set up every service, product or domain properly and follow the same steps to get the order completed. 

---

## Client Management

Always use Podio to add or update clients. After saving a client in Podio, WHMCS will automatically be updated within a few minutes. 
Do not add nor edit client details in WHMCS. 

In Podio, make sure that there's at least a primary contact, an email address and a phone number. 
This will be enough for hosting, ssl certificates and google apps. 

For domain registrations and renewals, an ABN, a state and country will also be required. 
If anything is missing, it won't prevent the client from being added to WHMCS, but registrations, transfers and renewals will not work.

If the ABN isn't in Podio, you might be able to find it here, by changing the end of the url. 

[http://abr.business.gov.au/SearchByName.aspx?SearchText=oobidat](http://abr.business.gov.au/SearchByName.aspx?SearchText=oobidat)

---

## New Orders

### Adding a new Order

Orders > **Add New Order**

- Make sure you select the right contact from the drop down list, as notifications will automatically be sent to the selected client.  
- We currently don't use **Promo Codes** or multiple **Payment methods**, so just leave that as is. 
- Set the **Order Status** to **Active**
- Products/Services
    - Leave this part untouched if you're only registering domain names
    - In the domain field, in general: 
        - For hosting (email, web or app), add the domain name **without www.**
        - For SSL certificates, add the domain **with www.**
        - For Wildcard SSL certificates, a wildcard * before the domain name (eg *.domain.com.au).
        - For Software, a domain name isn't required, it's possible to use **Brad's Macbook** for example
    - Select **Yearly** in the **Billing Cycle** drop down, unless the client is expecting otherwise (eg. monthly or quarterly).
    - **Quantity** and **Price Override** should not be changed; leave as is. 
    - Some products will have additional fields: 
        - For **SSL certificates**: whether a dedicated IP is required.
        - For **Google Apps**: the number of email accounts required.
    - Click on **Add another product** to add multiple items to the order, for example a hosting account and an ssl certificate. 
- Domain Registration
    - Choose **Registration** for new domain names, or **Transfer** for existing domains that need to be transferred to us. 
    - Enter the domain name **without www.**, and make sure there aren't any spaces at either end of the domain name. 
    - Leave **unticked**; DNS Management, Email Forwarding, ID Protection
    - Click on **Add another domain** to add additional domains to the order.
- Once all items have been added to the left; check the pricing on the right hand side to make sure it's as expected.
- Click on **Submit Order** if it's all ok. The next page will display an overview of the order. At this point, the products/services have not been set up yet, domains have not been registered yet. Next step: 

### Configuring the Products/Services/Domains

- Click on each item's label to configure each item (eg Shared Hosting, Domain, etc...). Or open each product in their own tab to configure them one by one.
- For **Shared Hosting**: 
    - Make sure the right server is selected
    - Click on Create to set it up automatically on the selected server
- For **Domain Names**:
    - Select **VentraIP** in the registrars list. 
    - Enter the **Entity name** (as per the Australian Business Register) in the **Registrant Name** and **Eligibility Name** fields
    - Enter the **ABN** in the **Registrant ID** field.
    - For businesses, enter the **ABN** in the **Eligibility ID** field and select **ABN** from the **Eligibility Type** field. Or enter the ACN and select Company for companies (the ACN is the ABN without the two-digit pre-fix), or Incorporated Assoc Number for Associations, etc...
    - Save changes.
    - Click on **Register** or **Transfer** depending on the case.
    - Enter the correct name servers (meson defaults already in there). If it's a transfer, also add the EPP code. Click **Yes** to confirm.
- For **Google Apps**:
    - Add the domain name in the **GoogleApps Domain** field, without www.
    - Add the client's purchase order number in the **GoogleApps PurchaseOrderID** field. 
    - Click on **Create** to set it up automatically.
- For **SSL certificates**:
    - We're not sure yet. 
- For **anything else**, manual setup will be required.

---

## Changing Plans

This is only applies to hosting. 
This doesn't apply to domain names and ssl certificates, which will require a new order to be placed. 

This can be done two different ways. 
It will depend on whether the client needs to be invoiced for the difference between the old and new plan or not.

###  Change plans without invoicing the difference

Clients will not be invoiced for the difference between the old and new plan. 

- Go to the Product/Service you want to change.
- In the drop down **Product/Service**, select the new plan.
- If you want clients to be invoiced the new price after the due date;
tick "Auto Recalculate on Save" on the right hand side.
- Make sure the **First Payment Amount** is the same as the **Recurring Amount** and change then save if needed. 
- Click **Save Changes**

###  Change plans and invoice the difference

Plan changes are not possible if there are outstanding invoices.
All outstanding invoices will need to be paid before changing plans is possible.

#### To change Web & App hosting

- Go to the Product/Service you want to upgrade. 
- Click on **Upgrade/Downgrade** in the top right corner. 
- In the pop up window: 
    - Select the new Product/Service.
    - It will then display the difference in cost for the remaining period. 
    - Click on **Create Order** which will generate a new invoice for the difference. 

#### To change Email hosting through Google Apps

- Go to the Product/Service you want to upgrade. 
- Click on **Upgrade/Downgrade** in the top right corner.
- In the pop up window:  
    - At **Upgrade Type**, choose **Configurable Options**
    - Change the number of seats.
    - It will then display the difference in cost for the remaining period. 
    - Click on **Create Order** which will generate a new invoice for the difference. 

### Applying the plan changes on the servers

- Go back to the Product/Service you just upgraded.
- Make sure the **First Payment Amount** is the same as the **Recurring Amount** and change then save if needed. 
- In **Module Commands**, click **Change Package**

---

## Changing Billing Cycles

- Go to the Product/Service you want to change. 
- Change the **Billing Cycle** and tick **Auto Recalculate on Save**.
- Click **Save Changes**
- Make sure the **First Payment Amount** is the same as the **Recurring Amount** and update if needed. 

*Warning*

- This due date and any existing invoices will remain the same. The new billing cycle will only apply once the current cycle is over and any future invoices. 
- This will reset the price to the plan's default price. 
If a client has a some kind of deal, with a price that is different from the plan's
default price, then it's up to you to calculate the recurring amount (depending on the billing cycle). 
Enter the new amount in the **Recurring Amount** field and do not tick **Auto Recalculate on Save**.

---