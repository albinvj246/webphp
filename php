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


n=(input("enter string"))
x=n.upper()
for i in range(65,91,1):
    c=x.count(chr(i))
    if(c!=0):
        print(c,chr(i))

n = input("Enter string: ")
n = n.upper()
x = n.split()
for i in x:
    if len(i) > 3:
        print(i[0], end='')

n = input("Enter string: ")
z = n.replace(" ", "")
c = len(z)
print("Result:")
for i in range(1, c, 2):
    print(z[i], end='')
print()
for i in range(-1,-c-1, -2):
    print(z[i], end='')

for i in range (6):
    for j in range(1,r+1)://5,0,-1//range(r,0,-1)
        print(c, end=' ')//number=number+-1//print(i*2)
    print()
