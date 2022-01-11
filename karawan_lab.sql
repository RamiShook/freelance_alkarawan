-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2021 at 01:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karawan_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `en_body` longtext DEFAULT NULL,
  `ar_body` longtext DEFAULT NULL,
  `lang_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `en_body`, `ar_body`, `lang_id`) VALUES
(1, '<div class=\"section page-content-first\">\n<div class=\"container\">\n<div class=\"text-center mb-2  mb-md-3 mb-lg-4\">\n<div class=\"h-sub theme-color\">Our dentists working to your smiles</div>\n\n<h1>About Our Clinic</h1>\n\n<div class=\"h-decor\">&nbsp;</div>\n</div>\n</div>\n\n<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-lg-6 text-center text-lg-left pr-md-4\"><img alt=\"\" class=\"w-100\" src=\"images/content/about-01.jpg\" />\n<div class=\"row mt-3\">\n<div class=\"col-6\"><img alt=\"\" class=\"w-100\" src=\"images/content/about-03.jpg\" /></div>\n\n<div class=\"col-6\"><img alt=\"\" class=\"w-100\" src=\"images/content/about-04.jpg\" /></div>\n</div>\n</div>\n\n<div class=\"col-lg-6 mt-3 mt-lg-0\">\n<p>For nearly 16 years, our financial district dentist, Adam Smith, DDS and the dental team at DentCo Dental Clinic have provided cosmetic dentistry as well as family dentistry services. Dr. Adam understands that patients have a variety of practices in the area to choose from.</p>\n\n<p>Come and experience dentistry carried out a little differently in our Private Practice. A practice where you will:</p>\n\n<ul class=\"marker-list-md\">\n	<li>Be involved in your care and treatment choices</li>\n	<li>Be welcomed and feel relaxed and cared for</li>\n	<li>Appreciate the well qualified, experienced team</li>\n	<li>Want the best dentistry available</li>\n</ul>\n\n<div class=\"mt-3 mt-md-7\">&nbsp;</div>\n\n<h3>Mission / Vision <span class=\"theme-color\">Statement</span></h3>\n\n<div class=\"mt-0 mt-md-4\">&nbsp;</div>\n\n<p>It is our mission to exceed expectations by providing exceptional dental care to our patients and at the same time, building relationships of trust with them.</p>\n\n<p>Our vision is to be one of the leading dental clinic in the area, expanding our services to reach additional community members. We work to be trusted by patients, a valued partner in the community.</p>\n</div>\n</div>\n</div>\n</div>\n<!--//section--><!--section-->\n\n<div class=\"section\">\n<div class=\"container-fluid px-0\">\n<div class=\"row no-gutters\">\n<div class=\"col-xl-6 bg-grey\">\n<div class=\"max-670 mx-lg-auto px-15\">\n<div class=\"title-wrap\">\n<h2 class=\"h1\">Our <span class=\"theme-color\">Advantages</span></h2>\n</div>\n\n<div class=\"mt-lg-5\">&nbsp;</div>\n\n<div class=\"row\">\n<div class=\"col-sm-7\">\n<ul class=\"marker-list-md\">\n	<li>Specialists and Dentists as One Team</li>\n	<li>Initial Dental Assessment</li>\n	<li>All Types of Dental Services</li>\n	<li>Safety by Credentials</li>\n	<li>Dental Implant Experience</li>\n	<li>Innovation</li>\n	<li>3D Imaging Center</li>\n</ul>\n</div>\n\n<div class=\"col-sm-5 mt-1 mt-sm-0\">\n<ul class=\"marker-list-md\">\n	<li>On-site Laboratory</li>\n	<li>&ldquo;Same Day&rdquo; Dentistry</li>\n	<li>&ldquo;Same Day&rdquo; Dental Implants</li>\n	<li>Innovative Clinic Design</li>\n	<li>Complimentary Consultations</li>\n	<li>Insurance and Financing</li>\n	<li>Services Cost</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n\n<div class=\"col-xl-6 banner-left bg-full\" style=\"background-image: url(images/content/banner-right-1.jpg)\">&nbsp;</div>\n</div>\n</div>\n</div>\n<!--//section--><!--section-->\n\n<div class=\"section\">\n<div class=\"container\">\n<div class=\"title-wrap text-center\">\n<div class=\"h-sub theme-color\">Motivation is easy</div>\n\n<h2 class=\"h1\">Our Core Values</h2>\n\n<div class=\"h-decor\">&nbsp;</div>\n</div>\n\n<div class=\"row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left\" data-slick=\"{&quot;slidesToShow&quot;: 3, &quot;responsive&quot;:[{&quot;breakpoint&quot;: 1024,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}}]}\">\n<div class=\"col-md\">\n<div class=\"icn-text\">\n<div class=\"icn-text-simple\">&nbsp;</div>\n\n<div>\n<h5 class=\"icn-text-title\">Innovation</h5>\n\n<p>Embrace change, encourage invention and continually remain at the forefront of advances in oral health for the good of our patients</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-md\">\n<div class=\"icn-text\">\n<div class=\"icn-text-simple\">&nbsp;</div>\n\n<div>\n<h5 class=\"icn-text-title\">Compassion</h5>\n\n<p>Demonstrate caring and sensitivity for the diverse backgrounds of our patients and colleagues and generosity in our communities</p>\n</div>\n</div>\n</div>\n\n<div class=\"col-md\">\n<div class=\"icn-text\">\n<div class=\"icn-text-simple\">&nbsp;</div>\n\n<div>\n<h5 class=\"icn-text-title\">Integrity</h5>\n\n<p>Adhere to high ethical and professional standards, demonstrating commitment to our responsibilities with trust, honesty and respect for all</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<!--section-->\n\n<div class=\"section\">\n<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-lg-4\">\n<div class=\"title-wrap\">\n<h2 class=\"h1\">Our Office</h2>\n\n<div class=\"h-decor\">&nbsp;</div>\n</div>\n\n<p>Our dental office in is a state of the art dental facility equipped with the newest technology, capable of handling all of your dental needs. All of our operatories are equipped with intraoral cameras that are able to show us, and you, the precise treatment you might attain on a television screen.</p>\n\n<div class=\"mt-4\">&nbsp;</div>\n\n<h3>Amenities</h3>\n\n<div class=\"mt-lg-4\">&nbsp;</div>\n\n<ul class=\"marker-list-md\">\n	<li>TV&rsquo;s in each treatment room</li>\n	<li>Complimentary coffee, Juice</li>\n	<li>Wireless Internet</li>\n	<li>Warm lavender towels</li>\n</ul>\n</div>\n\n<div class=\"col-lg-8 mt-4 mt-lg-0\">\n<div class=\"slider-gallery\">\n<ul class=\"slider-gallery-main list-unstyled js-slider-gallery-main\">\n	<li><img alt=\"\" src=\"images/content/slider-gallery-00.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-01.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-02.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-03.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-04.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-05.jpg\" /></li>\n</ul>\n\n<ul class=\"slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs\">\n	<li><img alt=\"\" src=\"images/content/slider-gallery-00-sm.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-01-sm.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-02-sm.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-03-sm.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-04-sm.jpg\" /></li>\n	<li><img alt=\"\" src=\"images/content/slider-gallery-05-sm.jpg\" /></li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n', '<div class=\"section page-content-first\">\n    <div class=\"container\">\n       <div class=\"text-center mb-2  mb-md-3 mb-lg-4\">\n          <div class=\"h-sub theme-color\">يعمل أطباء الأسنان لدينا على ابتسامتك</div>\n          <h1>حول عيادتنا</h1>\n          <div class=\"h-decor\">&nbsp;</div>\n       </div>\n    </div>\n    <div class=\"container\">\n       <div class=\"row\">\n          <div class=\"col-lg-6 text-center text-lg-left pr-md-4\">\n             <img alt=\"\" class=\"w-100\" src=\"images/content/about-01.jpg\" />\n             <div class=\"row mt-3\">\n                <div class=\"col-6\"><img alt=\"\" class=\"w-100\" src=\"images/content/about-03.jpg\" /></div>\n                <div class=\"col-6\"><img alt=\"\" class=\"w-100\" src=\"images/content/about-04.jpg\" /></div>\n             </div>\n          </div>\n          <div class=\"col-lg-6 mt-3 mt-lg-0\">\n             <p>منذ ما يقرب من 16 عامًا ، قدم طبيب الأسنان في المنطقة المالية لدينا ، آدم سميث ، و DDS وفريق طب الأسنان في DentCo Dental Clinic خدمات طب الأسنان التجميلي بالإضافة إلى خدمات طب أسنان الأسرة. يدرك الدكتور آدم أن المرضى لديهم مجموعة متنوعة من الممارسات في المنطقة للاختيار من بينها.</p>\n             <p>تعال واختبر طب الأسنان بشكل مختلف قليلاً في عيادتنا الخاصة. ممارسة حيث سوف:</p>\n             <ul class=\"marker-list-md\">\n                <li>شارك في خيارات الرعاية والعلاج الخاصة بك</li>\n                <li>كن موضع ترحيب واشعر بالاسترخاء والعناية</li>\n                <li>نقدر الفريق من ذوي الخبرة والمؤهلين تأهيلا جيدا</li>\n                <li>تريد أفضل طب أسنان متاح</li>\n             </ul>\n             <div class=\"mt-3 mt-md-7\">&nbsp;</div>\n             <h3>المهمة / الرؤية <span class=\"theme-color\">صياغات</span></h3>\n             <div class=\"mt-0 mt-md-4\">&nbsp;</div>\n             <p>مهمتنا هي تجاوز التوقعات من خلال توفير رعاية أسنان استثنائية لمرضانا وفي نفس الوقت بناء علاقات ثقة معهم.</p>\n             <p>تتمثل رؤيتنا في أن نكون إحدى عيادات الأسنان الرائدة في المنطقة ، وأن نوسع خدماتنا للوصول إلى أعضاء آخرين في المجتمع. نعمل لنكون موضع ثقة المرضى ، شريك قيم في المجتمع.</p>\n          </div>\n       </div>\n    </div>\n </div>\n <!--//section-->\n <!--section-->\n <div class=\"section\">\n    <div class=\"container\">\n       <div class=\"title-wrap text-center\">\n          <div class=\"h-sub theme-color\">Motivation is easy</div>\n          <h2 class=\"h1\">Our Core Values</h2>\n          <div class=\"h-decor\"></div>\n       </div>\n       <div class=\"row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left\" data-slick=\'{\"slidesToShow\": 3, \"responsive\":[{\"breakpoint\": 1024,\"settings\":{\"slidesToShow\": 2}}]}\'>\n          <div class=\"col-md\">\n             <div class=\"icn-text\">\n                <div class=\"icn-text-simple\"><i class=\"icon-innovation\"></i></div>\n                <div>\n                   <h5 class=\"icn-text-title\">Innovation</h5>\n                   <p>Embrace change, encourage invention and continually remain at the forefront of advances in oral health for the good of our patients</p>\n                </div>\n             </div>\n          </div>\n          <div class=\"col-md\">\n             <div class=\"icn-text\">\n                <div class=\"icn-text-simple\"><i class=\"icon-compassion\"></i></div>\n                <div>\n                   <h5 class=\"icn-text-title\">Compassion</h5>\n                   <p>Demonstrate caring and sensitivity for the diverse backgrounds of our patients and colleagues and generosity in our communities</p>\n                </div>\n             </div>\n          </div>\n          <div class=\"col-md\">\n             <div class=\"icn-text\">\n                <div class=\"icn-text-simple\"><i class=\"icon-integrity\"></i></div>\n                <div>\n                   <h5 class=\"icn-text-title\">Integrity</h5>\n                   <p>Adhere to high ethical and professional standards, demonstrating commitment to our responsibilities with trust, honesty and respect for all</p>\n                </div>\n             </div>\n          </div>\n       </div>\n    </div>\n </div>\n <!--//section-->\n ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `cta_link` text NOT NULL,
  `button_lable` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `ar_heading` text NOT NULL,
  `ar_description` text NOT NULL,
  `ar_button_lable` text NOT NULL,
  `ar_cta_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `heading`, `description`, `photo`, `cta_link`, `button_lable`, `display_order`, `lang_id`, `is_active`, `ar_heading`, `ar_description`, `ar_button_lable`, `ar_cta_link`) VALUES
(1, 'Leading the Way<br><b>in Laboratory Research</b>', 'Advanced medicine. Compassionate care', 'images/content/slider/slide-01.jpg', 'services.html', 'Explore our services', 1, NULL, 1, 'نقود الطريق<br><b>في الأبحاث المختبرية</b>', 'الطب المتقدم. الرعاية الرحيمة', 'تصفح خدماتنا', 'services.html'),
(2, 'We Provide							<br><b>Full Medical Care!</b>', 'Highest standards of customer service', 'images/content/slider/slide-02.jpg', 'services.html', 'Know more', 2, NULL, 1, 'نحن نقدم							<br><b>رعاية صحية شاملة!</b>', '', 'تعرف على المزيد', 'services.html'),
(3, 'We Provide							<br><b>Full Medical Care!</b>', 'Highest standards of customer service', 'images/content/slider/slide-03.jpg', 'services.html', 'Know more', 3, NULL, 1, 'نحن نقدم							<br><b>! رعاية صحية شاملة</b>', '', 'تعرف على المزيد', 'services.html');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ar_name` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_cat_id`, `name`, `ar_name`, `display_order`, `is_active`) VALUES
(1, 'Cosmetic Dentistry', 'طب الأسنان التجميلي', 1, 1),
(2, 'General Dentistry', 'طب الأسنان العام', 2, 1),
(3, 'Children`s Dentistry', 'طب أسنان الأطفال', 3, 1),
(4, 'Dental Implants', 'زرع الأسنان', 4, 1),
(5, 'Orthodontics', 'تقويم الأسنان', 5, 1),
(6, 'Dental Emergency', 'طوارئ الأسنان', 6, 1),
(7, 'Periodontics', 'اللثة', 7, 1),
(8, 'Dental Surgery', 'جراحة الأسنان', 8, 1),
(9, 'Dental Crowns & Bridges\r\n', 'تيجان وجسور الأسنان', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `featured_photo` text NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `meta_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `language` text NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `category_id`, `name`, `display_order`, `featured_photo`, `slug`, `title`, `meta_description`, `description`, `create_date`, `is_active`, `language`) VALUES
(1, 2, 'كيفية اختيار أفضل فرشاة أسنان', 1, 'images/slider-gallery-01.jpg', 'How-to-Choose-the-Best-Tooth-brush', 'كيفية اختيار أفضل فرشاة أسنان', '', '​\r\n<p>نظافة الفم ضرورية لصحتك العامة ، وليس فقط لصحة فمك. في الواقع ، تعتبر أمراض اللثة عامل خطر رئيسي لتطوير بعض الحالات الصحية الخطيرة ، مثل مرض السكري وأمراض القلب. يعد التنظيف المنتظم أحد أفضل الطرق للحفاظ على صحة أسنانك ولثتك. ومع ذلك ، كيف تعرف أي فرشاة أسنان هي الأفضل للاستخدام؟</p>\r\n\r\n<h4>نصائح لاختيار فرشاة الأسنان</h4>\r\n\r\n<p>هناك ميزات محددة للبحث عنها في فرشاة الأسنان ، بغض النظر عما إذا كانت تعمل بالطاقة أو يدوية. يمكن أن يجعل تنوع الأنماط والأحجام والأشكال لفرش الأسنان المتاحة اختيار الفرشاة المناسبة أمرًا ساحقًا. إليك ما يجب البحث عنه:</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md\"><img alt=\"\" class=\"img-fluid\" src=\"./images/blog/blog-post-img-4.jpg\" /></div>\r\n\r\n<div class=\"col-md mt-2 mt-md-0\">\r\n<p><b>توصيات الخبراء.</b> ابحث عن فرش أسنان تعمل بالطاقة أو يدوية بختم اعتماد جمعية طب الأسنان الأمريكية. يمكنك أيضًا أن تطلب من طبيب أسنانك توصية للتأكد من أن فرشاة أسنانك قد اجتازت اختبارات مراقبة الجودة من أجل السلامة وفعالية التنظيف.</p>\r\n\r\n<p><b>خيارات الشعر الخشن.</b> تتوفر فراشي الأسنان اليدوية أو رؤوس الاستبدال لفرشاة الأسنان الكهربائية بشعيرات نايلون صلبة أو متوسطة أو ناعمة. الشعيرات الناعمة هي الخيار الأكثر أمانًا وراحة لمعظم الناس. يمكن أن تتلف المينا الذي يحمي أسنانك وسطح الجذر واللثة اعتمادًا على قوة الشعيرات ومدى قوة تنظيف أسنانك. توفر أطراف الشعيرات الدائرية مزيدًا من الحماية.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"mt-3\">&nbsp;</div>\r\n\r\n<p>حجم رأس فرشاة الأسنان. أفضل حجم لرأس فرشاة الأسنان هو الحجم الذي يسمح بسهولة الوصول إلى أسطح جميع أسنانك. رأس فرشاة الأسنان الذي يبلغ طوله بوصة واحدة وعرضه نصف بوصة سهل الاستخدام لمعظم البالغين ويمكن أن يصل إلى جميع أسنانك بكفاءة. يجب أن يكون لفرشاة الأسنان مقبض طويل بما يكفي لحملها في يدك بشكل مريح.</p>\r\n\r\n<p>تأكد من استبدال فرشاة أسنانك كل ثلاثة أشهر أو عندما تبدأ في التآكل ، أيهما يأتي أولاً. من الضروري أيضًا استبدال فرشاة أسنانك بعد إصابتك بنزلة برد لأن الشعيرات يمكن أن تتراكم البكتيريا وتؤدي إلى الإصابة مرة أخرى.</p>\r\n', '2021-06-08 20:58:35', 1, 'ar'),
(2, 9, 'إذن ، ما مقدار الجنس الطبيعي؟', 2, 'images/special-photo-04.jpg', 'hello-world', 'إذن ، ما مقدار الجنس الطبيعي؟', '', '​<span style=\"color: rgb(0, 0, 0); font-family: Arial, Helvetica, Tahoma, Verdana, sans-serif; font-size: 12px;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.<br />\n<img alt=\"\" src=\"./images/1525166885.png\" />​<img alt=\"\" src=\"./images/1246146981.png\" style=\"width: 1366px; height: 768px;\" /><br />\n<a href=\"./images/1525166885.png\"><img alt=\"\" src=\"/images/1525166885.png\" /></a>​</span>', '2021-06-15 12:59:26', 1, 'en'),
(4, 2, 'كيفية اختيار أفضل فرشاة أسنان1', 4, 'images/slider-gallery-01.jpg', 'How-to-Choose-the-Best-Tooth-brush1', '1كيفية اختيار أفضل فرشاة أسنان', '', '​\n<p>نظافة الفم ضرورية لصحتك العامة ، وليس فقط لصحة فمك. في الواقع ، تعتبر أمراض اللثة عامل خطر رئيسي لتطوير بعض الحالات الصحية الخطيرة ، مثل مرض السكري وأمراض القلب. يعد التنظيف المنتظم أحد أفضل الطرق للحفاظ على صحة أسنانك ولثتك. ومع ذلك ، كيف تعرف أي فرشاة أسنان هي الأفضل للاستخدام؟</p>\n\n<h4>نصائح لاختيار فرشاة الأسنان</h4>\n\n<p>هناك ميزات محددة للبحث عنها في فرشاة الأسنان ، بغض النظر عما إذا كانت تعمل بالطاقة أو يدوية. يمكن أن يجعل تنوع الأنماط والأحجام والأشكال لفرش الأسنان المتاحة اختيار الفرشاة المناسبة أمرًا ساحقًا. إليك ما يجب البحث عنه:</p>\n\n<div class=\"row\">\n<div class=\"col-md\"><img alt=\"\" class=\"img-fluid\" src=\"./images/blog/blog-post-img-4.jpg\" /></div>\n\n<div class=\"col-md mt-2 mt-md-0\">\n<p><b>توصيات الخبراء.</b> ابحث عن فرش أسنان تعمل بالطاقة أو يدوية بختم اعتماد جمعية طب الأسنان الأمريكية. يمكنك أيضًا أن تطلب من طبيب أسنانك توصية للتأكد من أن فرشاة أسنانك قد اجتازت اختبارات مراقبة الجودة من أجل السلامة وفعالية التنظيف.</p>\n\n<p><b>خيارات الشعر الخشن.</b> تتوفر فراشي الأسنان اليدوية أو رؤوس الاستبدال لفرشاة الأسنان الكهربائية بشعيرات نايلون صلبة أو متوسطة أو ناعمة. الشعيرات الناعمة هي الخيار الأكثر أمانًا وراحة لمعظم الناس. يمكن أن تتلف المينا الذي يحمي أسنانك وسطح الجذر واللثة اعتمادًا على قوة الشعيرات ومدى قوة تنظيف أسنانك. توفر أطراف الشعيرات الدائرية مزيدًا من الحماية.</p>\n</div>\n</div>\n\n<div class=\"mt-3\">&nbsp;</div>\n\n<p>حجم رأس فرشاة الأسنان. أفضل حجم لرأس فرشاة الأسنان هو الحجم الذي يسمح بسهولة الوصول إلى أسطح جميع أسنانك. رأس فرشاة الأسنان الذي يبلغ طوله بوصة واحدة وعرضه نصف بوصة سهل الاستخدام لمعظم البالغين ويمكن أن يصل إلى جميع أسنانك بكفاءة. يجب أن يكون لفرشاة الأسنان مقبض طويل بما يكفي لحملها في يدك بشكل مريح.</p>\n\n<p>تأكد من استبدال فرشاة أسنانك كل ثلاثة أشهر أو عندما تبدأ في التآكل ، أيهما يأتي أولاً. من الضروري أيضًا استبدال فرشاة أسنانك بعد إصابتك بنزلة برد لأن الشعيرات يمكن أن تتراكم البكتيريا وتؤدي إلى الإصابة مرة أخرى.</p>\n', '2021-06-08 20:58:35', 1, 'ar'),
(5, 2, '2كيفية اختيار أفضل فرشاة أسنان', 5, 'images/slider-gallery-01.jpg', 'How-to-Choose-the-Best-Tooth-brush2', 'كيفية اختيار أفضل فرشاة أسنان2', '', '​\n<p>نظافة الفم ضرورية لصحتك العامة ، وليس فقط لصحة فمك. في الواقع ، تعتبر أمراض اللثة عامل خطر رئيسي لتطوير بعض الحالات الصحية الخطيرة ، مثل مرض السكري وأمراض القلب. يعد التنظيف المنتظم أحد أفضل الطرق للحفاظ على صحة أسنانك ولثتك. ومع ذلك ، كيف تعرف أي فرشاة أسنان هي الأفضل للاستخدام؟</p>\n\n<h4>نصائح لاختيار فرشاة الأسنان</h4>\n\n<p>هناك ميزات محددة للبحث عنها في فرشاة الأسنان ، بغض النظر عما إذا كانت تعمل بالطاقة أو يدوية. يمكن أن يجعل تنوع الأنماط والأحجام والأشكال لفرش الأسنان المتاحة اختيار الفرشاة المناسبة أمرًا ساحقًا. إليك ما يجب البحث عنه:</p>\n\n<div class=\"row\">\n<div class=\"col-md\"><img alt=\"\" class=\"img-fluid\" src=\"./images/blog/blog-post-img-4.jpg\" /></div>\n\n<div class=\"col-md mt-2 mt-md-0\">\n<p><b>توصيات الخبراء.</b> ابحث عن فرش أسنان تعمل بالطاقة أو يدوية بختم اعتماد جمعية طب الأسنان الأمريكية. يمكنك أيضًا أن تطلب من طبيب أسنانك توصية للتأكد من أن فرشاة أسنانك قد اجتازت اختبارات مراقبة الجودة من أجل السلامة وفعالية التنظيف.</p>\n\n<p><b>خيارات الشعر الخشن.</b> تتوفر فراشي الأسنان اليدوية أو رؤوس الاستبدال لفرشاة الأسنان الكهربائية بشعيرات نايلون صلبة أو متوسطة أو ناعمة. الشعيرات الناعمة هي الخيار الأكثر أمانًا وراحة لمعظم الناس. يمكن أن تتلف المينا الذي يحمي أسنانك وسطح الجذر واللثة اعتمادًا على قوة الشعيرات ومدى قوة تنظيف أسنانك. توفر أطراف الشعيرات الدائرية مزيدًا من الحماية.</p>\n</div>\n</div>\n\n<div class=\"mt-3\">&nbsp;</div>\n\n<p>حجم رأس فرشاة الأسنان. أفضل حجم لرأس فرشاة الأسنان هو الحجم الذي يسمح بسهولة الوصول إلى أسطح جميع أسنانك. رأس فرشاة الأسنان الذي يبلغ طوله بوصة واحدة وعرضه نصف بوصة سهل الاستخدام لمعظم البالغين ويمكن أن يصل إلى جميع أسنانك بكفاءة. يجب أن يكون لفرشاة الأسنان مقبض طويل بما يكفي لحملها في يدك بشكل مريح.</p>\n\n<p>تأكد من استبدال فرشاة أسنانك كل ثلاثة أشهر أو عندما تبدأ في التآكل ، أيهما يأتي أولاً. من الضروري أيضًا استبدال فرشاة أسنانك بعد إصابتك بنزلة برد لأن الشعيرات يمكن أن تتراكم البكتيريا وتؤدي إلى الإصابة مرة أخرى.</p>\n', '2021-06-08 20:58:35', 1, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `cms_user`
--

CREATE TABLE `cms_user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_user`
--

INSERT INTO `cms_user` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'Rami', '$2y$10$5O.re/0JkSls3FGpCNv.tO1Sc8kJlPxJ2.Rhw5GFi7PfNn6TBmEl6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `lang_id` int(11) NOT NULL,
  `lang_name` text NOT NULL,
  `en_value` text NOT NULL,
  `ar_value` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `lang_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:is text, 1:is html'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`lang_id`, `lang_name`, `en_value`, `ar_value`, `is_active`, `lang_type`) VALUES
(1, 'Box Lang1', 'Latest Equipment', 'أحدث المعدات', 1, 0),
(2, 'Box Lang2', 'Quality Service', 'جودة الخدمة', 1, 0),
(3, 'Box Lang', 'Skilled Team', 'فريق ماهر', 1, 0),
(4, 'Box Lang', 'Positive Reviews', 'مراجعات إيجابية', 1, 0),
(5, 'About us div name', 'About us', 'معلومات عنا', 1, 0),
(6, 'About us title', '<h2>Personal Licensed<br />\nDiagnostic <span class=\"theme-color\">Lab Services</span></h2>\n', '<h2>خدمات مرخصة<br />\nتشخيص <span class=\"theme-color\">خدمات المختبر</span></h2>\n', 1, 1),
(7, 'About us Description', '<p>We pride ourselves on the trained skills needed for the preparation of diversified testing. We are of the sound belief that timely diagnosis could cast off the scar of many of the grave diseases. It can be made possible if you consult your doctor for suspected diseases.</p>\n\n<ul class=\"marker-list-md\">\n	<li>All reports for clients are made simple and easy to understand</li>\n	<li>User- friendly website offers custom settings for each physician</li>\n	<li>We customize panels to meet physician&rsquo;s needs.</li>\n</ul>\n<a class=\"btn mt-3\" data-target=\"#modalBookingForm\" data-toggle=\"modal\" href=\"#\"><span>schedule a visit</span></a>', '<p>نفخر بأنفسنا على المهارات المدربة اللازمة لإعداد الاختبارات المتنوعة. نعتقد اعتقادا راسخا أن التشخيص في الوقت المناسب يمكن أن يزيل ندبة العديد من الأمراض الخطيرة. يمكن أن يكون ذلك ممكنًا إذا استشرت طبيبك بشأن الأمراض المشتبه فيها. <!-- p--></p>\n\n<ul class=\"marker-list-md\">\n	<li>أصبحت جميع التقارير الخاصة بالعملاء بسيطة وسهلة الفهم <!-- li--></li>\n	<li>يقدم موقع الويب سهل الاستخدام إعدادات مخصصة لكل طبيب <!-- li--></li>\n	<li>نقوم بتخصيص اللوحات لتلبية احتياجات الطبيب. <!-- li--></li>\n</ul>\n<a class=\"btn mt-3\" data-target=\"#modalBookingForm\" data-toggle=\"modal\" href=\"#\"><span>جدولة زيارة <!-- i--> <i class=\"icon-right-arrow\"> </i> </span></a>', 1, 1),
(9, 'Header contact info', '<div class=\"header-info\"><i class=\"icon-placeholder2\"></i>Kindi St, Baghdad, Iraq</div>\r\n                     <div class=\"header-phone\"><i class=\"icon-telephone\"></i><a href=\"tel:07735576545\">+964 773 557 6545</a></div>\r\n                     <div class=\"header-info\"><i class=\"icon-black-envelope\"></i><a href=\"mailto:info@dentco.net\">info@karawanlab.com</a></div>', '  <div class=\"header-info\"><i class=\"icon-placeholder2\"></i>شارع الكندي ، بغداد ، العراق</div>\r\n                     <div class=\"header-phone\"><i class=\"icon-telephone\"></i><a href=\"tel:07735576545\">+964 773 557 6545</a></div>\r\n                     <div class=\"header-info\"><i class=\"icon-black-envelope\"></i><a href=\"mailto:info@dentco.net\">info@karawanlab.com</a></div>', 1, 1),
(10, 'Header Facebook Link', 'https://www.facebook.com/ALKARAWAN90/', 'https://www.facebook.com/ALKARAWAN90/', 1, 1),
(11, 'First Price Box', '<h4 class=\"prices-box-title\">Healthy Days Special</h4>\n\n<div class=\"prices-box-text\">Includes: 76 Parametersl</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>24<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">Blood Glucose Fasting</div>\n\n<div class=\"prices-box-row\">Complete Hemogram</div>\n\n<div class=\"prices-box-row\">Kidney Function Test</div>\n\n<div class=\"prices-box-link\"><a class=\"btn\" href=\"form-payonline.html\"><span>booking now</span></a></div>\n', '<h4 class=\"prices-box-title\">أيام صحية خاصة</h4>\n\n<div class=\"prices-box-text\">يشمل: 76 معلمة</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>24<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">صيام جلوكوز الدم</div>\n\n<div class=\"prices-box-row\">الهيموجرام الكامل</div>\n\n<div class=\"prices-box-row\">اختبار وظائف الكلى</div>\n\n<div class=\"prices-box-link\"><a class=\"btn\" href=\"form-payonline.html\"><span>احجز الان</span></a></div>\n', 1, 1),
(12, 'Special Price Box', '<h4 class=\"prices-box-title\">OnePlusOne Extended</h4>\n\n<div class=\"prices-box-text\">Includes: 74 Parametersl</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>89<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">Blood Glucose Fasting</div>\n\n<div class=\"prices-box-row\">Complete Hemogram</div>\n\n<div class=\"prices-box-row\">Kidney Function Test</div>\n\n<div class=\"prices-box-link\"><a class=\"btn btn-white btn-white--all\" href=\"form-payonline.html\"><span>booking now</span></a></div>\n', '<h4 class=\"prices-box-title\">OnePlusOne Extended</h4>\n\n<div class=\"prices-box-text\">يشمل: 74 معلمة</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>89<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">صيام جلوكوز الدم</div>\n\n<div class=\"prices-box-row\">الهيموجرام الكامل</div>\n\n<div class=\"prices-box-row\">اختبار وظائف الكلى</div>\n\n<div class=\"prices-box-link\"><a class=\"btn btn-white btn-white--all\" href=\"form-payonline.html\"><span>احجز الان</span></a></div>\n', 1, 1),
(13, '3rd Price Box', '<h4 class=\"prices-box-title\">Basic Screening</h4>\n\n<div class=\"prices-box-text\">Includes: 60 Parametersl</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>49<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">Blood Glucose Fasting</div>\n\n<div class=\"prices-box-row\">Complete Hemogram</div>\n\n<div class=\"prices-box-row\">Kidney Function Test</div>\n\n<div class=\"prices-box-link\"><a class=\"btn\" href=\"form-payonline.html\"><span>booking now</span></a></div>\n', '<h4 class=\"prices-box-title\">الفحص الأساسي</h4>\n\n<div class=\"prices-box-text\">يشمل: 60 معلمة</div>\n\n<div class=\"prices-box-price\"><sub>$</sub>49<sub>.99</sub></div>\n\n<div class=\"prices-box-row\">صيام جلوكوز الدم</div>\n\n<div class=\"prices-box-row\">الهيموجرام الكامل</div>\n\n<div class=\"prices-box-row\">اختبار وظائف الكلى</div>\n\n<div class=\"prices-box-link\"><a class=\"btn\" href=\"form-payonline.html\"><span>احجز الان</span></a></div>\n', 1, 1),
(14, 'First Paragraph in Services Page', 'Clinical laboratory services are tests provided by a medical lab that aid in diagnosis and treatment of patients. There are many types of clinical laboratory services, including:\r\n', 'خدمات المختبرات الإكلينيكية هي اختبارات يقدمها معمل طبي تساعد في تشخيص وعلاج المرضى. هناك أنواع عديدة من خدمات المختبرات السريرية ، بما في ذلك:', 1, 0),
(15, 'Footer Our Contacts', '<h3>Our Contacts</h3>\r\n\r\n<div class=\"h-decor\">&nbsp;</div>\r\n\r\n<ul class=\"icn-list\">\r\n	<li>شارع الكندي ، بغداد ، العراق <br />\r\n	<a class=\"btn btn-xs btn-gradient\" href=\"https://www.google.com/maps?ll=31.504558,45.500157&z=6&t=m&hl=ar&gl=LB&mapclient=embed&saddr=%D9%86%D8%AC%D9%81%D8%8C+%D8%A7%D9%84%D8%B9%D8%B1%D8%A7%D9%82&daddr=Kindi+St,+Baghdad,+%D8%A7%D9%84%D8%B9%D8%B1%D8%A7%D9%82&dirflg=d\"><span>خريطة</span></a></li>\r\n	<li><b><span class=\"phone\"><span class=\"text-nowrap\"><a href=\"tel:07735576545\">+964 773 557 6545</a></span>, <span class=\"text-nowrap\">1-800-267-0001</span></span></b><br />\r\n	</li>\r\n	<li><a href=\"mailto:info@dentco.net\">info@dentco.net</a></li>\r\n</ul>\r\n', '   <h3>معلومات الاتصال</h3>\r\n    <div class=\"h-decor\"></div>\r\n    <ul class=\"icn-list\">\r\n        <li><i class=\"icon-placeholder2\"></i>شارع الكندي ، بغداد ، العراق\r\n            <br>\r\n            <a href=\"contact.php\" class=\"btn btn-xs btn-gradient\"><i class=\"icon-placeholder2\"></i><span>الاتجاهات على الخريطة</span><i class=\"icon-left-arrow\"></i></a>\r\n        </li>\r\n        <li dir=\"ltr\"><i class=\"icon-telephone\"></i><b><span class=\"phone\"><a href=\"tel:07735576545\"> <span class=\"text-nowrap\">+964 773 557 6545</span></a></span></b>\r\n            \r\n        </li>\r\n        <li><i class=\"icon-black-envelope\"></i><a href=\"mailto:info@karawanlab.com\">info@karawanlab.com</a></li>\r\n    </ul>	', 1, 1),
(16, 'Contact-us Page Paragraph', 'For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.', 'للأسئلة العامة ، يرجى إرسال رسالة إلينا وسنعاود الاتصال بك مباشرة. يمكنك أيضًا الاتصال بنا مباشرة للتحدث مع أحد أعضاء فريق الخدمة أو خبير التأمين.', 1, 0),
(17, 'Working Time for quickLinks Wrapper', '<h5 class=\"link-drop-title\"><i class=\"icon-clock\"></i>Working Time</h5>\r\n                        <table class=\"row-table\">\r\n                           <tr>\r\n                              <td><i>Mon-Thu</i></td>\r\n                              <td>08:00 - 20:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>Friday</i></td>\r\n                              <td> 07:00 - 22:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>Saturday</i></td>\r\n                              <td>08:00 - 18:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>Sunday</i></td>\r\n                              <td>Closed</td>\r\n                           </tr>\r\n                        </table>', '<h5 class=\"link-drop-title\">اوقات العمل<i class=\"icon-clock\"></i></h5>\r\n                        <table class=\"row-table\">\r\n                           <tr>\r\n                              <td><i>الاثنين - الخميس</i></td>\r\n                              <td>08:00 - 20:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>الجمعه</i></td>\r\n                              <td> 07:00 - 22:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>السبت</i></td>\r\n                              <td>08:00 - 18:00</td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td><i>الأحد</i></td>\r\n                              <td>مغلق</td>\r\n                           </tr>\r\n                        </table>', 1, 1),
(18, 'quickLinks Wrapper EmergencyCase', '<h5 class=\"link-drop-title\">Emergency Case</h5>\n\n<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth.</p>\n\n<ul class=\"icn-list\">\n	<li><span class=\"phone\">1-800-267-0000<br />\n	1-800-267-0001</span></li>\n	<li><a href=\"mailto:info@besthotel-email.com\">info@besthotel-email.com</a></li>\n</ul>\n\n<p class=\"text-right mt-2\"><a class=\"btn btn-sm btn-hover-fill link-inside\" href=\"#contactForm\">Our Contacts</a></p>\n', '<h5 class=\"link-drop-title\">الحالات الطارئة</h5>\n\n<p>قد تكون هناك حاجة إلى رعاية أسنان طارئة إذا تعرضت لضربة في الوجه أو فقدت حشوة أو كسرت سنًا.</p>\n\n<ul class=\"icn-list\">\n	<li><span class=\"phone\" dir=\"ltr\">+964 773 557 6545</span></li>\n	<li><a href=\"mailto:info@besthotel-email.com\">info@besthotel-email.com</a></li>\n</ul>\n\n<p class=\"text-right mt-2\"><a class=\"btn btn-sm btn-hover-fill link-inside\" href=\"contact.php\">معلومات الاتصال</a></p>\n', 1, 1),
(19, 'instagram Page Link', 'https://www.instagram.com/alkarawanlab/', 'https://www.instagram.com/alkarawanlab/', 1, 0),
(20, 'Map Location URL', 'https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d6821069.08179083!\r\n2d44.475388570648676!\r\n3d33.40759483529297!\r\n2m3!1f0!2f0!3f0!3m2!1i1024!\r\n2i768!4f13.1!4m9!3e6!4m3!3m2!\r\n1d30.490332799999997!\r\n2d43.7283183!4m3!3m2!\r\n1d33.3074789!2d44.3666191!5e0!\r\n3m2!1sar!2slb!4v1624273251511!\r\n5m2!1sar!2slb', 'https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d6821069.08179083!\r\n2d44.475388570648676!\r\n3d33.40759483529297!\r\n2m3!1f0!2f0!3f0!3m2!1i1024!\r\n2i768!4f13.1!4m9!3e6!4m3!3m2!\r\n1d30.490332799999997!\r\n2d43.7283183!4m3!3m2!\r\n1d33.3074789!2d44.3666191!5e0!\r\n3m2!1sar!2slb!4v1624273251511!\r\n5m2!1sar!2slb', 1, 0),
(21, 'Our Achievement Left Section', '					<img src=\"images/content/banner-right.jpg\" alt=\"\" class=\"w-sm-100\">\r\n					<div class=\"over-image-counter pos-left\">\r\n						<div class=\"d-flex w-100 justify-content-between\">\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"150\" data-speed=\"1500\">0</span><span class=\"sup\">K</span></div>\r\n								<div class=\"counter-box-sm-text\">Tests Performed</div>\r\n							</div>\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"50\" data-speed=\"1500\">0</span><span class=\"sup\">+</span></div>\r\n								<div class=\"counter-box-sm-text\">Permanent Staff</div>\r\n							</div>\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"250\" data-speed=\"1500\">0</span><span class=\"sup\">+</span></div>\r\n								<div class=\"counter-box-sm-text\">Suppliers</div>\r\n							</div>\r\n						</div>\r\n					</div>', '					<img src=\"images/content/banner-right.jpg\" alt=\"\" class=\"w-sm-100\">\r\n					<div class=\"over-image-counter pos-left\">\r\n						<div class=\"d-flex w-100 justify-content-between\">\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"150\" data-speed=\"1500\">0</span><span class=\"sup\">K</span></div>\r\n								<div class=\"counter-box-sm-text\">الاختبارات المنجزة</div>\r\n							</div>\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"50\" data-speed=\"1500\">0</span><span class=\"sup\">+</span></div>\r\n								<div class=\"counter-box-sm-text\">طاقم العمل</div>\r\n							</div>\r\n							<div class=\"counter-box-sm\">\r\n								<div class=\"counter-box-sm-number\"><span class=\"count\" data-to=\"250\" data-speed=\"1500\">0</span><span class=\"sup\">+</span></div>\r\n								<div class=\"counter-box-sm-text\">الموردين</div>\r\n							</div>\r\n						</div>\r\n					</div>', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `body` text NOT NULL,
  `button_value` text NOT NULL,
  `button_link` text NOT NULL,
  `ar_title` text NOT NULL,
  `ar_sub_title` text NOT NULL,
  `ar_body` text NOT NULL,
  `ar_button_value` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `display_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `photo`, `title`, `sub_title`, `body`, `button_value`, `button_link`, `ar_title`, `ar_sub_title`, `ar_body`, `ar_button_value`, `is_active`, `display_order`) VALUES
(1, 'images/content/special-photo-01.jpg', 'New Patient', 'Offer', 'Full Consultation\r\nScale & Polish', 'Schedule', 'contact.php', 'مريض جديد', 'عرض', 'استشارة كاملة مقياس & البولندية', 'احجز', 1, 1),
(4, 'images/content/special-photo-02.jpg', 'Free', 'Consultation\r\n', 'Contact us to find out more about this offer', 'Contact Us', 'contact.php', 'استشارة', 'مجانية', 'تواصل معنا لمزيد من المعلومات', 'تواصل معنا', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `en_name` text NOT NULL,
  `ar_name` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `en_slug` text NOT NULL,
  `ar_slug` text NOT NULL,
  `en_title` text NOT NULL,
  `ar_title` text NOT NULL,
  `en_meta_description` text NOT NULL,
  `ar_meta_description` text NOT NULL,
  `ar_description` longtext NOT NULL,
  `en_description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `en_name`, `ar_name`, `display_order`, `en_slug`, `ar_slug`, `en_title`, `ar_title`, `en_meta_description`, `ar_meta_description`, `ar_description`, `en_description`, `is_active`) VALUES
(2, 'About us', 'معلومات عنا', 1, 'about.php', 'about.php', 'About us', 'معلومات عنا', '', '', '', '', 1),
(3, 'Services', 'الخدمات', 2, 'services.php', 'services.php', 'Services', 'الخدمات', '', '', '', '', 1),
(4, 'Prices', 'الباقات', 3, 'packages.php', 'packages.php', 'packages', 'الباقات', '', '', '', '', 1),
(5, 'Blog', 'مقالات', 4, 'blog.php', 'blog.php', 'blog', 'مقالات', '', '', '', '', 1),
(6, 'Contacts', 'معلومات الاتصال', 5, 'contact.php', 'contact.php', 'Contacts', 'معلومات الاتصال', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `en_name` text NOT NULL,
  `ar_name` text NOT NULL,
  `icon` text NOT NULL,
  `photo` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `en_description` text NOT NULL,
  `ar_description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `en_name`, `ar_name`, `icon`, `photo`, `display_order`, `en_description`, `ar_description`, `is_active`) VALUES
(1, 'Molecular Testing & Oncology.', 'الاختبارات الجزيئية وعلم الأورام.', 'icon-molecular', 'images/content/services-01.jpg', 1, '<p>Our comprehensive and highly sensitive and specific range of tests can detect genetic alterations that drive tumor growth in all types of cancer. We are highly experienced in characterizing mechanisms of action of targeted therapies, particularly against epidermal growth factor receptor (EGFR), as well as other tyrosine kinase inhibitors.. We perform:</p>\n\n<ul class=\"marker-list-md\">\n	<li>Mutation analysis in tumor tissue and blood</li>\n	<li>Gene amplification and translocation testing</li>\n	<li>Immunohistochemistry (IHC)</li>\n	<li>Gene expression</li>\n	<li>dfdf</li>\n</ul>\n', '<p>يمكن لمجموعتنا الشاملة والحساسة للغاية والمحددة من الاختبارات الكشف عن التغيرات الجينية التي تؤدي إل ى نمو الورم في جميع أنواع السرطان. نحن نتمتع بخبرة عالية في توصيف آليات عمل العلاجات المستهدفة ، لا سيما ضد مستقبلات عامل نمو البشرة (EGFR) ، بالإضافة إلى مثبطات التيروزين كينيز الأخرى. نقوم بما يلي: <!-- p--></p>\n\n<ul class=\"marker-list-md\">\n	<li>تحليل الطفرات في أنسجة الورم والدم <!-- li--></li>\n	<li>اختبار التضخيم الجيني والانتقال <!-- li--></li>\n	<li>الكيمياء الهيستولوجية المناعية (IHC)</li>\n	<li>التعبير الجيني <!-- li--></li>\n	<li>سيبس</li>\n</ul>\n', 1),
(3, 'Histology', 'علم الانسجة', 'icon-testtube2', 'images/index-img-01-2.jpg', 2, '<p>Our SANAS accredited histology laboratory offers a diagnostic service to both the private and public sectors. Our large team of anatomical pathologists, technologists and technicians, with vast amounts of experience offers a diagnostic and consultative service on a number of tissue samples including biopsies and resection specimens.</p>\n\n<ul class=\"marker-list-md\">\n	<li>Immunocytochemistry</li>\n	<li>Immunofluorescence</li>\n	<li>Electron Microscopy</li>\n	<li>Neuropathology</li>\n</ul>\n', '<p> يقدم مختبر الأنسجة المعتمد من SANAS لدينا خدمة تشخيصية للقطاعين الخاص والعام. يقدم فريقنا الكبير من أخصائيي علم الأمراض التشريحي والتقنيين والفنيين ، الذين يتمتعون بكميات كبيرة من الخبرة ، خدمة تشخيصية واستشارية بشأن عدد من عينات الأنسجة بما في ذلك الخزعات وعينات الاستئصال. </ p>\n<ul class = \"marker-list-md\">\n<li> الكيمياء المناعية </ li>\n<li> المناعي </ li>\n<li> المجهر الإلكتروني </ li>\n<li> علم الأمراض العصبية </ li>\n</ul>', 1),
(4, 'Histology1', '1 علم الانسجة', 'icon-testtube2', 'images/index-img-01-2.jpg', 3, '<p>Our SANAS accredited histology laboratory offers a diagnostic service to both the private and public sectors. Our large team of anatomical pathologists, technologists and technicians, with vast amounts of experience offers a diagnostic and consultative service on a number of tissue samples including biopsies and resection specimens.</p>\n\n<ul class=\"marker-list-md\">\n	<li>Immunocytochemistry</li>\n	<li>Immunofluorescence</li>\n	<li>Electron Microscopy</li>\n	<li>Neuropathology</li>\n</ul>\n', '<p>يقدم مختبر الأنسجة المعتمد من SANAS لدينا خدمة تشخيصية للقطاعين الخاص والعام. يقدم فريقنا الكبير من أخصائيي علم الأمراض التشريحي والتقنيين والفنيين ، الذين يتمتعون بكميات كبيرة من الخبرة ، خدمة تشخيصية واستشارية بشأن عدد من عينات الأنسجة بما في ذلك الخزعات وعينات الاستئصال. <!-- p--></p>\n\n<ul class=\"marker-list-md\">\n	<li>الكيمياء المناعية <!-- li--></li>\n	<li>المناعي <!-- li--></li>\n	<li>المجهر الإلكتروني <!-- li--></li>\n	<li>علم الأمراض العصبية <!-- li--></li>\n</ul>\n', 1),
(5, 'Molecular Testing & Oncology.', 'الاختبارات الجزيئية وعلم الأورام.', 'icon-molecular', 'images/content/services-01.jpg', 4, '<p>Our comprehensive and highly sensitive and specific range of tests can detect genetic alterations that drive tumor growth in all types of cancer. We are highly experienced in characterizing mechanisms of action of targeted therapies, particularly against epidermal growth factor receptor (EGFR), as well as other tyrosine kinase inhibitors.. We perform:</p>\r\n\r\n<ul class=\"marker-list-md\">\r\n	<li>Mutation analysis in tumor tissue and blood</li>\r\n	<li>Gene amplification and translocation testing</li>\r\n	<li>Immunohistochemistry (IHC)</li>\r\n	<li>Gene expression</li>\r\n	<li>dfdf</li>\r\n</ul>\r\n', '<p>يمكن لمجموعتنا الشاملة والحساسة للغاية والمحددة من الاختبارات الكشف عن التغيرات الجينية التي تؤدي إل ى نمو الورم في جميع أنواع السرطان. نحن نتمتع بخبرة عالية في توصيف آليات عمل العلاجات المستهدفة ، لا سيما ضد مستقبلات عامل نمو البشرة (EGFR) ، بالإضافة إلى مثبطات التيروزين كينيز الأخرى. نقوم بما يلي: <!-- p--></p>\r\n\r\n<ul class=\"marker-list-md\">\r\n	<li>تحليل الطفرات في أنسجة الورم والدم <!-- li--></li>\r\n	<li>اختبار التضخيم الجيني والانتقال <!-- li--></li>\r\n	<li>الكيمياء الهيستولوجية المناعية (IHC)</li>\r\n	<li>التعبير الجيني <!-- li--></li>\r\n	<li>سيبس</li>\r\n</ul>\r\n', 1),
(6, 'Molecular Testing & Oncology.', 'الاختبارات الجزيئية وعلم الأورام.', 'icon-molecular', 'images/content/services-01.jpg', 5, '<p>Our comprehensive and highly sensitive and specific range of tests can detect genetic alterations that drive tumor growth in all types of cancer. We are highly experienced in characterizing mechanisms of action of targeted therapies, particularly against epidermal growth factor receptor (EGFR), as well as other tyrosine kinase inhibitors.. We perform:</p>\r\n\r\n<ul class=\"marker-list-md\">\r\n	<li>Mutation analysis in tumor tissue and blood</li>\r\n	<li>Gene amplification and translocation testing</li>\r\n	<li>Immunohistochemistry (IHC)</li>\r\n	<li>Gene expression</li>\r\n	<li>dfdf</li>\r\n</ul>\r\n', '<p>يمكن لمجموعتنا الشاملة والحساسة للغاية والمحددة من الاختبارات الكشف عن التغيرات الجينية التي تؤدي إل ى نمو الورم في جميع أنواع السرطان. نحن نتمتع بخبرة عالية في توصيف آليات عمل العلاجات المستهدفة ، لا سيما ضد مستقبلات عامل نمو البشرة (EGFR) ، بالإضافة إلى مثبطات التيروزين كينيز الأخرى. نقوم بما يلي: <!-- p--></p>\r\n\r\n<ul class=\"marker-list-md\">\r\n	<li>تحليل الطفرات في أنسجة الورم والدم <!-- li--></li>\r\n	<li>اختبار التضخيم الجيني والانتقال <!-- li--></li>\r\n	<li>الكيمياء الهيستولوجية المناعية (IHC)</li>\r\n	<li>التعبير الجيني <!-- li--></li>\r\n	<li>سيبس</li>\r\n</ul>\r\n', 1),
(7, 'Histology', 'علم الانسجة', 'icon-testtube2', 'images/index-img-01-2.jpg', 6, '<p>Our SANAS accredited histology laboratory offers a diagnostic service to both the private and public sectors. Our large team of anatomical pathologists, technologists and technicians, with vast amounts of experience offers a diagnostic and consultative service on a number of tissue samples including biopsies and resection specimens.</p>\r\n\r\n<ul class=\"marker-list-md\">\r\n	<li>Immunocytochemistry</li>\r\n	<li>Immunofluorescence</li>\r\n	<li>Electron Microscopy</li>\r\n	<li>Neuropathology</li>\r\n</ul>\r\n', '<p> يقدم مختبر الأنسجة المعتمد من SANAS لدينا خدمة تشخيصية للقطاعين الخاص والعام. يقدم فريقنا الكبير من أخصائيي علم الأمراض التشريحي والتقنيين والفنيين ، الذين يتمتعون بكميات كبيرة من الخبرة ، خدمة تشخيصية واستشارية بشأن عدد من عينات الأنسجة بما في ذلك الخزعات وعينات الاستئصال. </ p>\r\n<ul class = \"marker-list-md\">\r\n<li> الكيمياء المناعية </ li>\r\n<li> المناعي </ li>\r\n<li> المجهر الإلكتروني </ li>\r\n<li> علم الأمراض العصبية </ li>\r\n</ul>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_cat_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `en_slug` (`slug`) USING HASH,
  ADD KEY `post_category` (`category_id`);

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `display_order` (`display_order`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `post_category` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`blog_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
