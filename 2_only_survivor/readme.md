# Only Survivor

For this hypothetical game, write a function that accepts a single integer parameter: the number of players. When the game starts, the first person in line (`Player 1`) knocks out the next player in line (`Player 2`); The next remaining player (`Player 3`) does the same. The game continues until there's only one person left. Your function should tell me which player is still standing.

As an example, if the game had 9 players, here's what would happen:

1. `Player 1` knocks out `Player 2`
2. `Player 3` knocks out `Player 4`
3. `Player 5` knocks out `Player 6`
4. `Player 7` knocks out `Player 8`
5. `Player 9` knocks out `Player 1`
6. `Player 3` knocks out `Player 5`
7. `Player 7` knocks out `Player 9`
8. `Player 3` knocks out `Player 7`

`Player 3` is the winner. Your function should simply return the integer `3`.

Here is a sample function prototype in PHP:

```php
/**
 * Determine the winner of a game where each player knocks out the next player
 * in line until only one survivor remains.
 *
 * @param   int   $players    Number of players who start the game.
 * @return  int
 */
function onlySurvivor($players) {
  
}
```
