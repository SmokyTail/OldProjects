a = set()
a.add(2)
a.add(1)
print(a)

b = set("hello")
print(b)

a = ["aa","ab","aa","ba"]
print(set(a))

b = ["aa","ab","aa","ba"]
b.remove("aa")
print(len(b) == 3)

a = {1,2,3,4}
b = {3,4,5,6}
c = a.union(b)
print(c)

d = a.intersection(b)
print(d)