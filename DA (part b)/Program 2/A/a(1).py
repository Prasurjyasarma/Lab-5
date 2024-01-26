from scipy.stats import ttest_ind
from scipy.stats import ttest_ind
import pandas as pd

df = pd.read_csv('StudentsPerformance.csv')
male_scores = df[df['gender'] == 'male']['math score']
male_scores
