import matplotlib.pyplot as plt
<link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
    <script defer src="https://pyscript.net/latest/pyscript.js"></script>
x=[10,20,30,40]
y=["C","C++","Java","Python"]
ex=[0.4,0.0,0.0,0.0]
c=["r","b","g","y"]
plt.pie(x,labels=y,explore=ex,colors=c,autopct="%0.1f%%")


plt.show()
