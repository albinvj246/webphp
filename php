 x=int(a.get())
    p = [0, 1]
    for i in range(2, x):
        y = p[i-1] + p[i-2]
        p.append(y)
    m.config(text="fibonacci {}".format(p))

 x = int(a.get())
    if x < 2:
        m.config(text="%d is not prime" % x)
    else:
        for i in range(2, int(x**0.5) + 1):
            if x % i == 0:
                m.config(text="%d is not prime" % x)
                break
        else:
            m.config(text="%d is prime" % x)

x=int(a.get())
    n=1
    for i in range(1,x+1):
        n=n*i
    m.config(text="factorial %d"%n)
n=int(input("enter the no of elements"))
l=[]
for i in range(0,n):
    x=int(input("enter the number"))
    l.append(x)
for i in range(0,n-1):
    for j in range(0,n-i-1):
        if(l[j]>l[j+1]):
            l[j],l[j+1]=l[j+1],l[j]
ls=[]
t=-1
for i in range(0,n):
    ls.append(l[t])
    t=t-1
print(ls)
