X_multi = sm.add_constant(df[['sqft_living', 'bedrooms', 'bathrooms']])
y_multi = df['price']
model_multi = sm.OLS(y_multi, X_multi).fit()
# Summary of the multiple linear regression
print(model_multi.summary())