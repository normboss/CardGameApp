/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
    List of classes
    Game, Card, Deck, Player, Dealer, Hand, 
    The program must also have a scoring function to 
    determine the winning hand.
*/
package cardgameapp;

import java.util.Scanner;


public class CardGameApp 
{
    //  class member variables 
    int numberOfPlayers;
    String gameName = null;
    Deck theDeck = null;
    Scanner scan = new Scanner(System.in);
    Game game;

    // This is the class constructor
    // It is called when the “new” command is issued
    // It initializes class variables (data)
    public CardGameApp()
    {
        scan = new Scanner(System.in);
    }

    // builds the deck of cards and creates the player objects
    void initializeGame()
    {
//        game = new Game( numberOfPlayers );
        
    }

    // This is where the game really starts
    public void playTheGame()
    {
            // call function to initialize the app
        initializeGame();

    }

    public void start()
    {
        System.out.println("Enter game name:");
        this.gameName = scan.nextLine();
        System.out.println("Enter number of players");
        this.numberOfPlayers = scan.nextInt();
        this.game = new Game( this.numberOfPlayers );
        game.init();
    }
    
    public void run()
    {
        System.out.println("Question1?");
        String answer = scan.nextLine();
        
    }

    // main is where the OS starts the application after loading it into memory.
    public static void main( String args[] )
    {
        Hand h = new Hand();
        h.addCard( new Card( "5", "D" ));
        h.addCard( new Card( "5", "S" ));
        h.addCard( new Card( "K", "S" ));
        h.addCard( new Card( "K", "C" ));
        h.addCard( new Card( "K", "D" ));
        h.AnalyzeHand();

        // Declare and initialize an object reference variable.
        // NOTE: The “new” command causes memory to be allocated
        // for the class and then the “constructor” for the class is called.
        // This constructor requires a parameter
        CardGameApp cga = new CardGameApp();

        // Use the object reference variable “cga” to start the game
        // by calling the objects function “playTheGame()”
        cga.start();

    }
}