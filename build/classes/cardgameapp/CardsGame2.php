<?php

/**
 * @author 
 * @copyright 2016
 */
$first = 1;

class Card1 {
    var $value;
    var $suit;
    var $image;
    
    function Card1( $value, $suit, $image ) {
        $this->value = $value;
        $this->suit = $suit;
        $this->image = $image;
    }
}

class Hand {
	var $cards = Array();	
}

class Deck1 {
    var $cards = Array();
    var $cardCount = 0;
    var $hand = Array();
	
    public function Deck1() {
        $this->cards[ $this->cardCount++ ] = new Card1(1, "Clubs", "ace_of_clubs.svg" );
        $this->cards[ $this->cardCount++ ] = new Card1(2, "Clubs", "2_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(3, "Clubs", "3_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(4, "Clubs", "4_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(5, "Clubs", "5_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(6, "Clubs", "6_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(7, "Clubs", "7_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(8, "Clubs", "8_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(9, "Clubs", "9_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(10, "Clubs", "10_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(11, "Clubs", "jack_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(12, "Clubs", "queen_of_clubs.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(13, "Clubs", "king_of_clubs.png" );
        
        $this->cards[ $this->cardCount++ ] = new Card1(1, "hearts", "ace_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(2, "hearts", "2_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(3, "hearts", "3_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(4, "hearts", "4_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(5, "hearts", "5_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(6, "hearts", "6_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(7, "hearts", "7_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(8, "hearts", "8_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(9, "hearts", "9_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(10, "hearts", "10_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(11, "hearts", "jack_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(12, "hearts", "queen_of_hearts.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(13, "hearts", "king_of_hearts.png" );
        
        $this->cards[ $this->cardCount++ ] = new Card1(1, "diamonds", "ace_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(2, "diamonds", "2_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(3, "diamonds", "3_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(4, "diamonds", "4_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(5, "diamonds", "5_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(6, "diamonds", "6_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(7, "diamonds", "7_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(8, "diamonds", "8_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(9, "diamonds", "9_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(10, "diamonds", "10_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(11, "diamonds", "jack_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(12, "diamonds", "queen_of_diamonds.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(13, "diamonds", "king_of_diamonds.png" );
        
        $this->cards[ $this->cardCount++ ] = new Card1(1, "spades", "ace_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(2, "spades", "2_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(3, "spades", "3_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(4, "spades", "4_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(5, "spades", "5_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(6, "spades", "6_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(7, "spades", "7_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(8, "spades", "8_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(9, "spades", "9_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(10, "spades", "10_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(11, "spades", "jack_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(12, "spades", "queen_of_spades.png" );
        $this->cards[ $this->cardCount++ ] = new Card1(13, "spades", "king_of_spades.png" );
        
    }
    
    public function displayCards() 
    {
/*        
<!DOCTYPE html>
<html>
<head>
<title>Using Image in Webpage</title>
</head>
<body>
<p>Simple Image Insert</p>
<img src="/html/images/test.png" alt="Test Image" />
</body>
</html>
*/
        foreach ($this->cards as $c ) {
            $v = $c->value;
            $s = $c->suit;
            $i = $c->image;
            switch ( $v ) {
                case 1:
                    echo nl2br( "Ace of ".$c->suit." ".$c->image."\n" );
                    break;
                case 11:
                    echo nl2br( "Jack of ".$c->suit." ".$c->image."\n" );
                    break;
                case 12:
                    echo nl2br( "Queen of ".$c->suit." ".$c->image."\n" );
                    break;
                case 13:
                    echo nl2br( "King of ".$c->suit." ".$c->image."\n" );
                    break;
                default:
                    echo nl2br( $c->value." of ".$c->suit." ".$c->image."\n" );
            }
        }
    }
    
    public function displayCardImages() 
    {
/*        
<!DOCTYPE html>
<html>
<head>
<title>Using Image in Webpage</title>
</head>
<body>
<p>Simple Image Insert</p>
<img src="/html/images/test.png" alt="Test Image" />
</body>
</html>
*/
        foreach ($this->cards as $c ) 
        {
/*            if ( strstr( $c->image, "C:\\") ) { */
/*            if ( $first == 0 ) {
                $first = 1;
                $doc = new DOMDocument();
                $doc->load($c->image);
                $svg = $doc->getElementsByTagName('svg');
                
                echo "<div style='width: 100%, height: 100%; '>";
                print_r($svg); // DOMNodeList Object ( [length] => 1 ) 
                echo "</div>";
            } else {
                */
                printf( "%'-40s\n", "" );
                echo "</br>";
                printf( "<img width=\"100\" height=\"100\" src=\".\\images\\%s\" border=true /></br>", $c->image );
                printf( "%'-40s\n\n", "" );
                echo "</br>";
//            printf( "<img src=\"%s\" border=true /></br>", $c->image );
//            }
        }
    }
    
    public function shuffleCards() 
    {
        shuffle( $this->cards );
        shuffle( $this->cards );
        shuffle( $this->cards );
        shuffle( $this->cards );
        shuffle( $this->cards );
    }
	
    public function dealHand() {
        $cardCount = 0;
        foreach ($this->cards as $c ) 
        {
            $this->hand[ $cardCount++ ] = $c;
            echo "<span>";
            printf( "<img width=\"100\" height=\"100\" src=\".\\images\\%s\" border=true />", $c->image );
            echo "</span>";
            if ( $cardCount == 6 ) {
                break;
            }
        }
    }
}

$deck = new Deck1();
//echo nl2br("****************\n");
//$deck->displayCards();
//$deck->displayCardImages();
$deck->shuffleCards();
//echo nl2br("****************\t");
//$deck->displayCards();
//$deck->displayCardImages();
echo nl2br("");
$deck->dealHand();
echo nl2br("\n");
echo nl2br("");



?>