import turtle
import random
from turtle import Turtle

wn = turtle.Screen()
wn.bgcolor("black")
asteroid = turtle.Turtle()
asteroid.speed(0)
triad: Turtle = turtle.Turtle()
triad.speed(0)
triad.up()
triad.goto(-120, 120)
triad.down()
squad = turtle.Turtle()
squad.speed(0)
squad.up()
squad.goto(120, 120)
squad.down()
pentago = turtle.Turtle()
pentago.speed(0)
pentago.up()
pentago.goto(-120, -120)
pentago.down()
colors = ["red", "gold", "blue", "green", "white", "cyan", "pink"]

for i in range(50):
    triad.color(random.choice(colors))
    triad.forward(i * 3)
    triad.left(120)

    for i in range(50):
        triad.color(random.choice(colors))
        triad.forward(i * 2)
        triad.left(90)

        for i in range(50):
            triad.color(random.choice(colors))
            triad.forward(i * 2)
            triad.left(72)

            for i in range(75):
                triad.color(random.choice(colors))
                triad.forward(i)
                triad.left(60)

                for fi in range(50):
                    triad.color(random.choice(colors))
                    triad.forward(i * 3)
                    triad.left(144)



triad.up()
triad.goto(-110, 200)
triad.down()
triad.down("Triad")
triad.hideturtle()

squad.up()
squad.goto(120, 180)
squad.down()
squad.down("Squad")
squad.hideturtle()

pentago.up()
pentago.goto(-140, -20)
pentago.down("Pentago")
pentago.hideturtle()

asteroid.up()
asteroid.goto(0, 60)
asteroid.down()
asteroid.down("Asteroid")
asteroid.hideturtle()

turtle.done()
    
