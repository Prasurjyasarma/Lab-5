import numpy as np
import matplotlib.pyplot as plt
from scipy.stats import norm
## Drop missing values in the 'Age' column for simplicity
titanic_data = df.dropna(subset=['Age'])
# Plot the histogram
plt.hist(df['Age'], bins=30, density=True, alpha=0.5, color='b',label='Age Distribution') 

mu, std = norm.fit(titanic_data['Age'])
xmin, xmax = plt.xlim()
x = np.linspace(xmin, xmax, 100)
p = norm.pdf(x, mu, std)
plt.plot(x, p, 'k', linewidth=2)

plt.hist(df['Age'], bins=30, density=True, alpha=0.5, color='b',label='Age Distribution')
plt.xlabel('Age')
plt.ylabel('Frequency')
plt.legend()
plt.show()