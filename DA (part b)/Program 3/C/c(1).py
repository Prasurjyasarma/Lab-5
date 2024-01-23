X_logistic = df[['sqft_living', 'waterfront']]
y_logistic = (df['price'] > df['price'].median()).astype(int) 
# Binary target variable
X_train_log, X_test_log, y_train_log, y_test_log = train_test_split(X_logistic, y_logistic, 
test_size=0.2, random_state=42)
print(X_logistic)
print(y_logistic)