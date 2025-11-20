# Class Notes - November 20, 2025

This page has the notes that I took live during class.
They are not very well-organized.

## First Example Class - Dog

### Attributes and Behaviors
Every class definition includes attributes and behaviors. For a dog:
- attributes (these should all be nouns)
    - fur_color
    - Breed
    - Age
    - Size
    - Name
- behavior (these should all be verbs. They'll eventually be methods, so I'm 
going to write parenthesis after them)
    - bark()
    - attack()
    - push_sled()

### Create objects of the class (instances)

```python
fido = Dog(9, 'German Shephard')
fido.bark()
print(fido.age)

snoopy = Dog(80, 'Beagle')


BestDogs = [fido, snoopy]

#We've already said that every dog has a bark behavior
#so we could do something like this
for d in BestDogs:
    d.bark()
```
## Let's Make A Game

To play with the idea of classes, we're going to define a fantasy adventure 
game. To make that game, we'll need to define our classes. Let's break them
down into two catagories: heroes and enemies.

### Heroes:
- Warlock
    - attributes
        + patron
        + level
        + experience
        + charisma
        + hp
        + wearing
    - Behaviors
        + cast_spell()
        + equip()
        + take_damage()

- Fighter
    - attributes
        + strength
        + lore
        + weapon
        + hp
    - behaviors
        + hit()
        + pilliage()
        + block()
        + take_damage()

- Other Heroes (we didn't go into as much detail about these ones): 
    + Ranger
    + Paladin
    + Rogue
    

### Enemies

- Goblin
    - attributes
        + is_agro
        + target
        + hp
    - behaviors
        + bonk(target)
        + run()
        + take_damage()

- Bandit
    - attributes
        + loot
        + dagger_type
    - behaviors
        + steal(target)
        + take_damage()
- Other Enemies:
    - Dragon
    - Beholder
    - GelatinousCube

### Now, imagine that all of those classes exist.
We might be able to import them into the Python REPL and run a battle 
like this:

```python
yara = Warlock()
jeff = Goblin()
cara = Fighter()
kidus = Bandit()
ben = Warlock()

# Make a list of our heroes and our enemies. Each of these lists includes
# multiple classes, but that's okay in Python!
heroes = [yara, cara, ben]
enemies = [jeff, kidus]

# They all have an attribute called hp, so we could do something like this:
for p in heros + enemies:
    print(p.hp)

# During the battle, individuals will attack each other
kidus.steal(ben)
jeff.bonk(ben)

# This woldn't make sense - you have to ask an individual warlock to cast the
# spell, not the concept of Warlocks.
# (we had a brief aside about class methods, but I'm leaving that part
# out of our notes)
Warlock.cast_spell() #don't do this

# Instead, we'd have to call this method on an instance of the Warlock class:
yara.cast_spell()
ben.cast_spell()

```

### Assignment - Let's write these classes so that we can play the game!
- Create your class
- Write DocTests
- Then implement
    - You can define your attributes and behaviors
    - Everyone should have a take_damage() method

If it helps, here's a Dummy class that you can attack
in your Doctest.

```python

class DummyTarget:
    """
    >>> dummy = DummyTarget()
    >>> dummy.hp
    100
    >>> dummy.take_damage(25)
    >>> dummy.hp
    75
    >>> dummy.is_alive
    True
    >>> dummy.take_damage(100)
    >>> dummy.hp
    0
    >>> dummy.is_alive
    False
    """
    
    def __init__(self, hp=100):
        self.hp = health
        self.is_alive = True
        self.name = "Training Dummy"
    
    def take_damage(self, damage):
        """Take damage without any special effects."""
        self.hp -= damage
        if self.hp <= 0:
            self.hp = 0
            self.is_alive = False

if __name__ == "__main__":
    import doctest
    doctest.testmod()

```



