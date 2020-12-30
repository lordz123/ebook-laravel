import java.util.*;

public class strack {

  
  
// Java program for the above approach

 

 
// Recursive function to print stack
// elements from bottom to top without
// changing their order

static void PrintStack(Stack<Character> s)
{

    // If stack is empty

    if (s.isEmpty())

        return;
 

    char x = s.peek();
 

    // Pop top element of the stack

    s.pop();
 

    // Recursively call the

    // function PrintStack

    PrintStack(s);
 

    // Print the stack element

    // from the bottom

    System.out.print(x);
 

    // Push the same element onto the

    // stack to preserve the order

    s.add(x);
}
 
// Function to minimize binary String
// by removing subStrings consisting
// of same character

static void minString(String s)
{

    // Declare a stack of characters

    Stack<Character> Stack = new Stack<Character>();
 

    // Push the first character of

    // the String into the stack

    Stack.add(s.charAt(0));
 

    // Traverse the String s

    for (int i = 1; i < s.length(); i++) {
 

        // If Stack is empty

        if (Stack.isEmpty()) {
 

            // Push current character

            // into the stack

            Stack.add(s.charAt(i));

        }
 

        else {
 

            // Check if the current

            // character is same as

            // the top of the stack

            if (Stack.peek() == s.charAt(i)) {
 

                // If true, pop the

                // top of the stack

                Stack.pop();

            }
 

            // Otherwise, push the

            // current element

            else {

                Stack.push(s.charAt(i));

            }

        }

    }
 

    // Print stack from bottom to top

    PrintStack(Stack);
    System.out.println(" ");
    System.out.println("CCS");
}
 
// Driver Code

public static void main(String[] args)
{
Scanner scan = new Scanner(System.in);
    System.out.println("Enter the numbers consisting 0 and 1 ");
    String str = scan.nextLine();

    minString(str);
 
 
}

  
}