from sklearn.model_selection import train_test_split 
from sklearn.neighbors import KNeighborsClassifier
from sklearn import metrics
import pandas as pd
import numpy as np
import pickle

# Load the dataset
career = pd.read_csv('dataset9000.data', header=None)
career.columns = ["Database Fundamentals","Computer Architecture","Distributed Computing Systems",
"Cyber Security","Networking","Development","Programming Skills","Project Management",
"Computer Forensics Fundamentals","Technical Communication","AI ML","Software Engineering","Business Analysis",
"Communication skills","Data Science","Troubleshooting skills","Graphics Designing","Roles"]
career.dropna(how='all', inplace=True)

# Split the data into features (X) and target variable (y)
X = np.array(career.iloc[:, :17])  # X is skills
y = np.array(career.iloc[:, 17])   # Y is Roles

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=524)

# Initialize the KNN classifier
knn = KNeighborsClassifier(n_neighbors=5)

# Train the model
knn.fit(X_train, y_train)

# Make predictions on the test data
y_pred = knn.predict(X_test)

# Calculate the accuracy score
accuracy = metrics.accuracy_score(y_test, y_pred)
print('Accuracy:', accuracy * 100)

# Serialize the trained model
pickle.dump(knn, open('careerlast.pkl', 'wb'))
print('Model saved as careerlast.pkl')

# Calculate accuracy for different values of k
k_values = [3, 5, 7]  # Example values of k
top_k_accuracy = {}

for k in k_values:
    knn = KNeighborsClassifier(n_neighbors=k)
    knn.fit(X_train, y_train)
    y_pred = knn.predict(X_test)
    accuracy = metrics.accuracy_score(y_test, y_pred)
    top_k_accuracy[k] = accuracy

# Print the top 3 results
sorted_accuracy = sorted(top_k_accuracy.items(), key=lambda x: x[1], reverse=True)
print('Top results:')
for i, (k, acc) in enumerate(sorted_accuracy[:3], 1):
    print(f'{i}. k={k}, Accuracy: {acc * 100:.2f}%')
