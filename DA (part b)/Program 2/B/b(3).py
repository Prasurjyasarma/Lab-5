f_statistic, p_value_anova = f_oneway(*ethnicity_data.values())
# Print the results
print(f'F-Statistic: {f_statistic}')
print(f'P-Value (ANOVA): {p_value_anova}')

if p_value_anova < alpha:
 print("There is a significant difference in math scores among different ethnicities.")
else:
 print("There is no significant difference in math scores among different ethnicities.")