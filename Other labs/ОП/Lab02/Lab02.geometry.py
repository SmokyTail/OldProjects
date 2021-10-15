a = float(input())
b = c = 0
b = (a**2 + a**2)**0.5
c = ((a**2 + b**2)**0.5)/2
print(float(c))

a = float(input())
b = (1 / (4 * 3**0.5)) * (3 + 5**0.5) * a
print(float(b))

a = float(input())
b = 0.25 * (2 * (5 + 5**0.5) * a)**0.5
print(float(b))

import math
r = float(input())
a = float(input())
s = ((r * 2)**2)/math.sin(a)
print(float(s))