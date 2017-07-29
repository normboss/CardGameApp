/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TestPackage;

import cardgameapp.Card;
import cardgameapp.Hand;

/**
 *
 * @author Norm
 */
public class Test1 
{
    public Test1()
    {
        // -5D-JS-JD-KC-KD  [3 of a kind]
        Hand h = new Hand();
        h.addCard( new Card( "5", "D" ));
        h.addCard( new Card( "J", "S" ));
        h.addCard( new Card( "J", "D" ));
        h.addCard( new Card( "K", "C" ));
        h.addCard( new Card( "K", "D" ));
        h.AnalyzeHand();
    }    
}
