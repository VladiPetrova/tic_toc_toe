# Tic-Tac-Toe (Terminal Version)

This is a simple **two-player Tic-Tac-Toe game** implemented in PHP that runs entirely in the terminal.

## How to Play

1. **Start the game** by running the PHP script in the terminal:

   ```bash
   php tic_tac_toe.php
   ```

2. The game is for **two players**:

   * **Player 1** uses **X**
   * **Player 2** uses **O**

3. Players take turns placing their marks on the board.

4. **Entering coordinates**:

   * Each player will be prompted to enter the **row number (X)** first, then the **column number (Y)**.
   * Both row and column numbers must be **0, 1, or 2**.
  

5. **Winning the game**:

   * The first player to have **three of their marks in a row, column, or diagonal** wins.
   * A winning message appears in the terminal:


7. **Draw (tie)**:

   * If all cells are filled and no player has won, the game announces a draw.

8. After a win or a draw, the board is **reset automatically** for a new game.

## Rules

* Rows and columns are numbered **0 to 2**, starting from the **top-left corner**.
* Players alternate turns, starting with Player 1 (**X**).
* A cell **cannot be selected** if it is already occupied.

## Requirements

* PHP installed (PHP 7+ recommended)
* Terminal/command-line interface (Linux, macOS, or Windows)
