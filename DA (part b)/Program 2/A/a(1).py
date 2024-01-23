from scipy.stats import ttest_ind
# Load the dataset
df = pd.read_csv('StudentsPerformance.csv')
# Separate data for male and female students
from scipy.stats import ttest_ind
import pandas as pd
# Separate data for male students
male_scores = df[df['gender'] == 'male']['math score']
male_scores