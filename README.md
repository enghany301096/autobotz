# Autobotz - All-in-One Digital Marketing Platform (v8.0.8)

Autobotz is a comprehensive, multi-functional digital marketing platform built on top of PHP (CodeIgniter HMVC) designed to automate, manage, and optimize marketing efforts across Facebook, Instagram, SMS, Email, and Google My Business. With an advanced Visual Flow Builder, a built-in eCommerce engine, social posting schedulers, and comment automation utilities, Autobotz enables businesses to scale their conversions and engagements smoothly.

---

## 🚀 Key Modules & Features

### 1. Visual Flow Builder & Bot Manager
* **Interactive Drag-and-Drop Editor**: Build complex bot sequences visually without touching a line of code.
* **Rich Messaging Elements**: Send structured content using Cards, Carousels, and Media files (Images, Audio, Video, Files).
* **Interactive User Elements**: Configure custom variables, Buttons (Web URL, Webview [full/tall/compact], Phone call triggers, postback, unsubscribe), and Quick Replies (including automated Phone/Email retrieval).
* **Action Buttons**: Set up triggers for default workflows such as *Get Started*, *No Match*, *Unsubscribe*, and *Re-subscribe*.
* **One-Time Notifications (OTN)**: Send notifications outside the 24-hour Messenger window with subscriber consent.
* **eCommerce Direct Integration**: Seamlessly connect eCommerce product nodes directly into bot conversational flows.

### 2. Comment Growth Tools
* **Automated Comments & Replies**: Create structured reply templates triggered by specific keywords or apply a generic response.
* **Smart Filtering**: Automatically direct unique responses based on keywords found within user comments.
* **Engagement Boosters**: Auto-like and auto-share customer posts to increase organic reach.
* **Campaign Managers**: Easily schedule and launch automated comment/reply campaigns on pages.
* **In-Depth Reports**: Track engagement metrics with dedicated Auto Comment and Auto Reply reports.

### 3. Messenger eCommerce Store
* **Virtual Stores & Restaurants**: Launch instant online storefronts directly accessible inside Facebook Messenger and external web browsers.
* **Product Catalog Management**: Manage categories, dynamic product attributes (size, color, etc.), and stock inventory.
* **Smooth Checkout Experience**: Comprehensive checkout settings backed by popular payment systems.
* **Marketing Integrations**: Create discount coupons, set up physical delivery points, and manage incoming orders.
* **Abandoned Cart Reminders**: Automatically trigger sequences to recover lost sales (reminds users who left products in their carts).

### 4. Broadcasting Suite
* **Messenger Broadcasts**: Reach subscribers at scale with advanced targeting options (gender, locale, timezone, labels).
* **SMS & Email Campaigns**:
  * Broadcast SMS messages using integrated SMS APIs.
  * Send rich email campaigns using a robust Drag-and-Drop HTML Email Template Builder.
* **Contact Management**: Organize contacts into groups, import/export databases via CSV, and delete contacts in bulk.

### 5. Social Posting & Post Planner
* **Multi-Platform Posting**: Automatically publish to Facebook Pages, Instagram Business accounts, and GMB.
* **Interactive Post Types**: Share text, link, single/multi-image, video, carousel/slide, or CTA (Call-to-Action) posts.
* **Bulk Scheduler**: Upload post schedules in bulk using CSV templates.
* **RSS Auto-Posting**: Hook up RSS feeds to post updates to social channels automatically.

### 6. Live Chat (Human Takeover)
* **Real-time Conversation**: Take over bot conversations in real-time to provide human agent support.
* **Subscriber Directory**: Track subscriber opt-in details, status, and demographic variables.
* **Dynamic Tagging**: Add or create subscriber labels directly inside the chat window for easy segmentation.

### 7. Google My Business Automation (Xerobiz)
* **GMB Post Manager**: Publish media, offers, and events onto Google My Business listings.
* **Review Responder**: Automatically scan reviews and post reply templates.
* **RSS Auto-Post to GMB**: Automate Google updates based on website RSS feeds.

---

## 🔌 Supported API Integrations

Autobotz features deep integrations with top-tier tools across multiple categories:

| Integration Type | Supported Providers & Services |
| :--- | :--- |
| **Payment Gateways** | PayPal, Stripe, SenangPay, SSLCOMMERZ, Instamojo, Mollie, Toyyibpay, Paystack, Razorpay, Paymaya, MyFatoorah |
| **Email Autoresponders** | Mailchimp, Sendinblue (Brevo), ActiveCampaign, Mautic, Acelle |
| **SMS Gateways** | Twilio, Nexmo (Vonage), Plivo, Clickatell, RouteSMS, Clickatell, and custom HTTP APIs |
| **Email Sending APIs** | SMTP, Mailgun, Postmark, Mandrill, SendGrid |
| **Social Apps (APIs)** | Facebook, Google, Twitter/X, LinkedIn, Reddit, YouTube, Pinterest |

---

## 🛠️ Technology Stack & Architecture

* **Backend**: Built with PHP 7.x/8.x using the CodeIgniter 3 HMVC (Hierarchical Model-View-Controller) structure for high modularity.
* **Database**: MySQL / MariaDB using the `mysqli` driver.
* **Frontend**: Responsive UI styled with Bootstrap, jQuery, FontAwesome, and the Stisla Admin template.
* **RTL Layout**: Built-in support for Right-to-Left (RTL) rendering (such as Arabic default interface settings).

---

## ⚙️ Project Structure & Directory Mapping

```
├── application/             # Core MVC directories
│   ├── config/              # Configuration files (database, autoload, app settings)
│   ├── controllers/         # CI Controllers (Admin, Cron_job, Ecommerce, Messenger_bot)
│   ├── models/              # Database Models
│   ├── modules/             # HMVC Add-on Modules (comboposter, visual_flow_builder, blog, etc.)
│   └── views/               # Frontend template views
├── assets/                  # CSS/JS dependencies, styles, and image templates
├── ci/                      # CodeIgniter system components
├── documentation/           # HTML user guide documents
├── plugins/                 # Builder libraries (Flow Builder, Email Drag & Drop, Menu Manager)
├── system/                  # Core CodeIgniter framework system files
└── index.php                # Front controller bootstrapping the application
```

---

## 🔧 Installation & Setup Guidelines

### 1. Prerequisites
Ensure your server meets the following requirements:
* PHP 7.4+ (Check settings for standard limits)
* MySQL 5.7+ / MariaDB 10.3+
* PHP Extensions enabled: `curl`, `openssl`, `mbstring`, `zip`, `mysqli`
* Apache mod_rewrite enabled (using custom `.htaccess`)

### 2. Database & Application Config
1. Configure your database connection in `application/config/database.php`:
   ```php
   $db['default']['hostname'] = 'localhost';
   $db['default']['username'] = 'YOUR_DB_USER';
   $db['default']['password'] = 'YOUR_DB_PASSWORD';
   $db['default']['database'] = 'auto_botz';
   ```
2. Set your custom parameters in `application/config/my_config.php`:
   ```php
   'product_name' => 'Autobotz',
   'product_version' => '8.0.8',
   'time_zone' => 'Africa/Cairo',
   'language' => 'arabic',
   'is_rtl' => '1',
   ```

### 3. Crucial Cron Jobs Configuration
To run automation scripts, schedule background queues, publish posts, and send bulk campaigns, you must add Cron Jobs to your server.

Set up the following cron scripts executing at their designated intervals (replace `yourdomain.com` with your domain and `YOUR_API_KEY` with the central webhook security token from `my_config.php`):

```bash
# Update subscriber profiles (Every 5 Minutes)
*/5 * * * * curl "http://yourdomain.com/cron_job/background_scanning_update_subscriber_info/YOUR_API_KEY" >/dev/null 2>&1

# Publish Scheduled Posts (Every 5 Minutes)
*/5 * * * * curl "http://yourdomain.com/cron_job/publish_post/YOUR_API_KEY" >/dev/null 2>&1

# SMS Campaign Queue sender (Every Minute)
* * * * * curl "http://yourdomain.com/cron_job/sms_sending_command/YOUR_API_KEY" >/dev/null 2>&1

# Email Campaign Queue sender (Every Minute)
* * * * * curl "http://yourdomain.com/cron_job/email_sending_command/YOUR_API_KEY" >/dev/null 2>&1

# eCommerce Abandoned Cart Reminders (Hourly)
0 * * * * curl "http://yourdomain.com/cron_job/ecommerce_abandoned_cart_reminder/YOUR_API_KEY" >/dev/null 2>&1

# Sequence Message Broadcasting (Hourly / Daily)
0 * * * * curl "http://yourdomain.com/cron_job/sequence_message_broadcast_hourly/YOUR_API_KEY" >/dev/null 2>&1
```

---

## 📖 Accessing Documentation
The project includes self-contained documentation in HTML format located in the `documentation/` folder.
To explore the manual:
1. Open the [documentation/index.html](file:///Users/hany/Sites/auto_botz/autobotz/documentation/index.html) file in your web browser.
2. Navigate the sidebar to view tutorials on FB/IG accounts setup, Flow Builder node operations, eCommerce configurations, and Broadcasting settings.
