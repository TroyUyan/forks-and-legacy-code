from graphics import *

def main():
    win = GraphWin("Chapter 4", width=500, height=500)
    shape = Rectangle(Point(50,50), Point(100,100))
    shape.setOutline("red")
    shape.setFill("red")
    shape.draw(win)
    for i in range(10):
        p = win.getMouse()
        c = shape.getCenter()
        dx = p.getX() - c.getX()
        dy = p.getY() - c.getY()
        i = shape.clone()
        i.move(dx,dy)
        i.draw(win)

    text = Text(Point(220,450), "Click again to quit")
    text.setFill("white")
    text.draw(win)
    win.setBackground("black")    
    win.getMouse()
    win.close()
main()
