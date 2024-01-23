X_simple = sm.add_constant(df[['sqft_living']])
y_simple = df['price']
model_simple = sm.OLS(y_simple, X_simple).fit()
print(model_simple.summary())