tax = 1.13
onlytax = 0.13
exitsizeloop = 1
exittoppingloop = 1
while exitsizeloop == 1:
  size = input("What type of pizza would you like? Large or XL?")
  size = size.lower()
  cost = 0
  if size.count("ge") > 0: 
    cost = 6
    print("You have chosen a Large Pizza")
    exitsizeloop = 0
  elif size.count("x") > 0:
    cost = 10
    print("You have chosen an XL Pizza")
    exitsizeloop = 0
  else:
    print("Please enter a valid Pizza size")

  if exitsizeloop == 0:
    while exittoppingloop == 1:
      toppings = input("How many topping would you like? 0-4?")
      if toppings.count("0") > 0:
        cost = cost + 0
        exittoppingloop = 0
      elif toppings.count("1") > 0:
        cost = cost + 1
        exittoppingloop = 0
      elif toppings.count("2") > 0:
        cost = cost + 1.75
        exittoppingloop = 0
      elif toppings.count("3") > 0:
        cost = cost + 2.5
        exittoppingloop = 0
      elif toppings.count("4") > 0:
        cost = cost + 3.35
        exittoppingloop = 0
      else:
        print("Invalid Topping Number")
        
print("Your Subtotal is $", round(cost, ndigits=2))
print("Your Tax is $", round(cost * onlytax, ndigits=2))
print("Your Total is $", round(cost * tax, ndigits=2))