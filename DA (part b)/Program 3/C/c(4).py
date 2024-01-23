accuracy_log = accuracy_score(y_test_log, y_pred_log)
conf_matrix_log = confusion_matrix(y_test_log, y_pred_log)
print(f'Accuracy (Logistic Regression): {accuracy_log}')
print(f'Confusion Matrix (Logistic Regression): \n{conf_matrix_log}')