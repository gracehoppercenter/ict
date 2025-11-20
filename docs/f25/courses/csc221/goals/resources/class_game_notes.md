# Game Notes

I'll take notes on this page during class

Class of Dogs
Objects:
- Attributes
    - Fur Color
    - Breed
    - Age
    - Size
    - Name
- Behavior
    - bark
    - attack
    - push_sled

## Create objects of the class (instances)
fido = Dog(9, 'German Shephard')
fido.bark()
print(fido.age)

snoopy = Dog(80, 'Beagle')

BestDogs = [fido, snoopy]

for d in BestDogs:
    d.bark()

## 

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
- Other Heroes: 
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
    - behavior
        + steal(target)
        + take_damage()

- Dragon
- Beholder
- GelatinousCube



### This is a battle

```python
yara = Warlock()
jeff = Goblin()
cara = Fighter()
kidus = Bandit()
ben = Warlock()

heros = [yara, cara, ben]
enemies = [jeff, kidus]

# get starting hp
for p in heros + enemies:
    print(p.hp)

kidus.steal(ben)
jeff.bonk(ben)

Warlock.cast_spell() #don't do this

```

### Assignment
- Create your class
- Write DocTests
- Then implement
    - You can define your attributes and behaviors
    - Everyone should have a take_damage() method

If it helps, here's a Dummy class that you can attack
in your Doctest.

```python


```



