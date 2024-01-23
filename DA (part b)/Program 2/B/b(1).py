from scipy.stats import f_oneway
df = pd.read_csv('StudentsPerformance.csv')
# Extract math scores for each ethnicity_groups
ethnicity_groups = df['ethnicity'].unique()
ethnicity_group