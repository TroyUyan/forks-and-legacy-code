from graphics import *

def main():
    win = GraphWin("Chapter 4", width=500, height=500)
    win.setBackground("gray")

    face = Circle(Point(250,250),180)
    face.setOutline("yellow")
    face.setFill("yellow")
    face.draw(win)

    reye = Circle(Point(200,200),20)
    reye.setOutline("white")
    reye.setFill("white")
    reye.draw(win)

    rpupil = Circle(Point(207,207),10)
    rpupil.setOutline("black")
    rpupil.setFill("black")
    rpupil.draw(win)

    leye = reye.clone()
    leye.move(100,0)
    leye.draw(win)

    lpupil = rpupil.clone()
    lpupil.move(90,0)
    lpupil.draw(win)

    nose = Polygon(Point(250,250),Point(230,270),Point(270,290))
    nose.setOutline("black")
    nose.setFill("black")
    nose.draw(win)
    
    mouth = Oval(Point(210,320),Point(290,370))
    mouth.setOutline("black")
    mouth.setFill("black")
    mouth.draw(win)

    
    #text = Text(Point(60,490), "Click to quit")
    #text.draw(win)
    win.getMouse()
    win.close()
main()
