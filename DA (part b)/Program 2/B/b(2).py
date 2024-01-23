ethnicity_data = {ethnicity: df[df['ethnicity'] == ethnicity]['math score'] for ethnicity in 
ethnicity_groups}
ethnicity_data