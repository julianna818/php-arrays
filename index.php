<?php
  $company = 'Fox';
  $title = 'Arrays Exercise';
  $topic = 'Shows';
  $franchise = 'It&rsquo;s Always Sunny in Philadelphia';

  // Let's create a simple array
  $shows = array(
    'The Gang Gets Whacked',
    'Dennis and Dee Go on Welfare',
    'The Dennis System',
    'Mac Day',
    'Sweet Dee&rsquo;s Dating a Retarded Person',
    'Kitten Mittons',
    'The Gang Gets Analyzed',
    'How Mac Got Fat',
    'The Gang Solves the Gas Crisis',
    'Charlie Work'
  );

  // Let's create an associative array
  $showYears = array(
    'The Gang Gets Whacked' => 2007,
    'Dennis and Dee Go on Welfare' => 2008,
    'The Dennis System' => 2008,
    'Mac Day' => 2008,
    'Sweet Dee&rsquo;s Dating a Retarded Person' => 2009,
    'Kitten Mittons' => 2010,
    'The Gang Gets Analyzed' => 2012,
    'How Mac Got Fat' => 2012,
    'The Gang Solves the Gas Crisis' => 2013,
    'Charlie Work' => 2015
  );

  // Count how many items are stored in the array $shows
  $showsLength = count($shows);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are way more than <?php echo $showsLength; ?> shows in the <em><?php echo $franchise; ?></em> franchise, but here are some of the best.</p>
      <ul class="list-group pb-4" style="max-width: 30rem;">
        <?php
          foreach ($shows as $show) {
              echo '<li class="list-group-item">'.$show.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($show);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> show is <em><?php echo $shows[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> shows were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 30rem;">
        <?php
          foreach ($showYears as $show => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$show.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($show);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>







