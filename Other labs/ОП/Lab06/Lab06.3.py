import calculator
calc = calculator.Calculator()
calc.add(2)
print(calc.get_current())

import my_module
mmhw = my_module.hello_world("HillBilly")

print(mmhw)
import datetime
current_date = datetime.datetime.now()
print(current_date)

from calculator import Calculator
calc = Calculator()
calc.add(2)
print(calc.get_current())

from my_module import hello_world
print(hello_world("HillBilly"))