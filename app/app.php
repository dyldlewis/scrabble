<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
      return $app["twig"]->render("scrabble.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $scrabble = new ScrabbleScore();
        $results = $scrabble->scrabbleScoreKeeper($_GET["user_input"]);
        return $app["twig"]->render("results.html.twig", array("score" => $results));
    });

    return $app;





 ?>
