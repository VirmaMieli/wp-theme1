<!DOCTYPE html>
<html>
<head>
  <title>A single post template</title>
</head>
<body>

  <div id="site-header">
    <h1>Welcome to my site</h1>
    <nav>
      <ul>
        <li><a href=''>Home</a></li>  
        <li><a href=''>About</a></li>  
        <li><a href=''>Contact</a></li>  
      </ul>  
    </nav>
  </div>
  
  <div id="article">
    <h2 class="article-title"><?php the_title() ?></h2>
    <div class="article-content"><?php the_content() ?></div>
    <div class="article-meta">Published on <?php the_time( "Y-m-d" ) ?> by <?php the_author() ?></div>
  </div>
  
  <div id="site-footer">
    <nav>
      <ul>
        <li><a href=''>Home</a></li>  
        <li><a href=''>About</a></li>  
        <li><a href=''>Contact</a></li>  
      </ul>  
    </nav>
    <div id="copyright">&copy; Antti Pehkonen</div>
  </div>
  
</body>
</html>