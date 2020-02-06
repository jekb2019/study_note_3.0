<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>STUDY NOTE</title>
  </head>
  <body>
    <div class="container">
      <header>
        <h1 id="title"><a href="index.php">Study Note</a></h1>
        <p id="subtitle"><small>Perfect time to study programming</small></p>
        <nav id="top_menu_nav">
            <ul>
              <li id="java_menu">
                <a href="#">Java</a>
              </li>
              <li id="html_menu">
                <a href="#">HTML</a>
              </li>
              <li id="css_menu">
                <a href="#">CSS</a>
              </li>
              <li id="javascript_menu">
                <a href="#">Javascript</a>
              </li>
              <li id="git_menu">
                <a href="#">Git</a>
              </li>
            </ul>
          </nav>
      </header>
      <aside id="left_sidebar">
        <h3 id="main_menu">Study Note</h3>
        <ul id="submenu">
          <li id="java_menu"><a href="index.php?subject=java">Java</a></li>
          <li id="html_menu"><a href="index.php?subject=html">HTML</a></li>
          <li id="css_menu"><a href="index.php?subject=css">CSS</a></li>
          <li id="javascript_menu"><a href="index.php?subject=javascript">Javascript</a></li>
          <li id="git_menu"><a href="index.php?subject=git">Git</a></li>
        </ul>
      </aside>
      <aside id="right_sidebar">
        <article id="advertisement">
          <p>Ad inquiry</p>
        </article>
      </aside>
      <section class="content">
        <article>
          <h1>
            <?php
              if(isset($_GET['subject'])){
                echo $_GET['subject'];
              }else{
                echo "Welcome";
              }
             ?>
          </h1>
          <?php
            if(isset($_GET['subject'])){
              echo file_get_contents("data/".$_GET['subject']);
            }else{
              echo "Study Note. The perfect time to study programming.";
            }
           ?>
        </article>
      </section>
      <footer>
        <div id="footer_container">
          <div id="information">
            <dl id="information_dlist">
              <dt>Information</dt>
              <dd><a href="#">Study Note</a></dd>
            </dl>
          </div>
          <div id="contact">
            <dl id="contact_dlist">
                <dt>Contact</dt>
                <dd><a href="#">Email</a></dd>
            </dl>
          </div>
          <div id="author_SNS">
            <dl id="author_SNS_dlist">
              <dt>Author SNS</dt>
              <dd><a href="https://github.com/jekb2019">Github</a></dd>
              <dd><a href="https://jekdev.blogspot.com">Blog</a></dd>
              <dd><a href="https://jekb2019.github.io/MyWebProfile/">Author Information</a></dd>
            </dl>
          </div>
          <div id="help">
            <dl id="help_dlist">
              <dt>Help</dt>
              <dd><a href="#">FAQ</a></dd>
            </dl>
          </div>
        </div>
        <div id="copyright">
          <p><small>&copy; 2020 Jason Ko All rights reserved. <a id="terms" href="#">Terms of Use</a> </small><p>
        </div>
      </footer>
    </div>
  </body>
</html>
