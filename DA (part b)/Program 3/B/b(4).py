X_multi = sm.add_constant(df[['sqft_living', 'bedrooms', 'bathrooms']])
y_multi = df['price']
model_multi = sm.OLS(y_multi, X_multi).fit()
predictions_multi = model_multi.predict(X_multi)
predictions_multipredictions_multi = model_multi.predict(X_multi)
predictions_multi