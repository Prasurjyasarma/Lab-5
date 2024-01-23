#Import necessary libraries
import pandas as pd
# Load your dataset
df = pd.read_csv('train.csv')
### Calculate probability of an event
probability_event = df['Survived'].value_counts() / len(df['Survived'])
print(probability_event)