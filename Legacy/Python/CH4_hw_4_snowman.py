from graphics import *

def main():
    win = GraphWin("Chapter 4", width=500, height=600)
    win.setBackground("white")

    #line for horizon
    horizon = Line(Point(0,400),Point(600,400))
    horizon.setFill("gray")
    horizon.setOutline("gray")
    horizon.draw(win)

    #sm base
    base = Circle(Point(400,450), 80)
    base.setFill("white")
    base.setOutline("black")
    base.draw(win)

    #sm mid
    mid = Circle(Point(400,320), 60)
    mid.setFill("white")
    mid.setOutline("black")
    mid.draw(win)

    #sm head
    head = Circle(Point(400,220), 45)
    head.setFill("white")
    head.setOutline("black")
    head.draw(win)

    #sm button1
    b1 = Circle(Point(400,300), 5)
    b1.setFill("black")
    b1.setOutline("black")
    b1.draw(win)

    #sm button2
    b2 = b1.clone()
    b2.move(0,22)
    b2.draw(win)

    #sm button3
    b3 = b2.clone()
    b3.move(0,22)
    b3.draw(win)

    #sm eyeleft
    eyeleft = Circle(Point(390,210), 4)
    eyeleft.setFill("black")
    eyeleft.setOutline("black")
    eyeleft.draw(win)

    #sm eyeright
    eyeright = eyeleft.clone()
    eyeright.move(20,0)
    eyeright.draw(win)

    #sm nose
    nose = Polygon(Point(395,225),Point(395,235),Point(415,230))
    nose.setOutline("orange")
    nose.setFill("orange")
    nose.draw(win)
    
    #tree trunk
    trunk = Rectangle(Point(100,440),Point(150,350))
    trunk.setFill("brown")
    trunk.setOutline("brown")
    trunk.draw(win)    
    
    #tree bottom layer
    treebottom = Polygon(Point(125,245),Point(20,350),Point(230,350))
    treebottom.setOutline("green4")
    treebottom.setFill("green4")
    treebottom.draw(win)
    
    #tree med layer
    treemed = treebottom.clone()
    treemed.move(0,-70)
    treemed.draw(win)

    #tree top layer
    treetop = treemed.clone()
    treetop.move(0,-70)
    treetop.draw(win)
    
    #example
    #x = Line(Point(0,400),Point(600,400))
    #x.setFill("")
    #x.setOutline("")
    #x.draw(win)
    
    #text = Text(Point(60,490), "Click to quit")
    #text.draw(win)
    win.getMouse()
    win.close()
main()
