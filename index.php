<?php
  $database = [
     'aticle1' =>[
       'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
       'text' => 'The recent <a href="#">ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person&#8217s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.

       Since this ruling was published on 13 May 2014, we&#8217ve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public&#8217s right to know and distribute information.

       If you have a removal request, please fill out this <a href="#">web form</a>. You&#8217ll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We&#8217ll also look at whether there&#8217s a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.

       We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU&#8217s ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it&#8217s important to respect the Court&#8217s judgement and we are working hard to devise a process that complies with the law.

       When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.'
     ],
     'aticle2' =>[
       'title' => 'How does Google protect my privacy and keep my information secure?',
       'text' => 'We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.

       We&#8217re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We&#8217ve also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.

       You can find out more about safety and security online, including how to protect yourself and your family online, at the <a href="#">Google Safety Centre.</a>

       <a href="#">Find out more</a> about how we keep your personal information private and safe – and put you in control.'
     ],
     'aticle3' =>[
       'title' => 'How can I remove information about myself from Google’s search results?',
       'text' => 'Google search results are a reflection of the content publicly available on the web. Search engines can&#8217t remove content directly from websites, so removing search results from Google wouldn&#8217t remove the content from the web. If you want to remove something from the web, you should <a href="#">contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google&#8217s search results, please <a href="#">click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google&#8217s search results. If you have an urgent removal request, you can also <a href="#">visit our help page for more information.</a>'
     ],
     'aticle4' =>[
       'title' => 'Are my search queries sent to websites when I click on Google Search results?',
       'text' => 'In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a href="#">Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a href="#">here</a>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.'
     ],
  ];
// var_dump($database);
//
// foreach ($database as $articles => $data) {
//   var_dump($articles);
//   echo $data['title'];
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
  </head>
  <body>
    <header>
      <div class="container flex">
        <div class="logo flex">
          <img src="img/googlelogo_color_74x24dp.png" alt="logo"> <p>Privacy & Terms</p>
        </div>
        <nav class="menu flex">
          <div class="navbar">
            <ul>
              <li><a href="#">Overview</a></li>
              <li><a href="#">PrivacyPolicy</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Technologies</a></li>
              <li ><a class="nav_faq" href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="account">
            <p>Google Account</p>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <ul class="faq">
          <?php foreach ($database as $articles => $data) {?>
            <li class= "article">
              <h2 class= "title"><?php echo $data['title']?></h2>
              <p class= "text"><?php echo $data['text']?></p>
            </li>
          <?php } ?>
        </ul>
      </div>

    </main>
  </body>
</html>
