from datetime import date
from flask import Flask, jsonify, request
from io import StringIO

import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score, confusion_matrix, classification_report
import matplotlib.pyplot as plt
import joblib
import mysql.connector
import json

db_config = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'anti_stunting'
}

# df = pd.read_csv('datalatih.csv')

conn = mysql.connector.connect(**db_config)
sql = 'SELECT * FROM datalatih'        
df = pd.read_sql(sql, conn)

sql1 = 'SELECT * FROM databalita'        
df1 = pd.read_sql(sql1, conn)
conn.close()

app = Flask(__name__)

@app.route('/api/klasifikasi-stunting', methods=['GET'])
def klasifikasi_stunting():
    X_train, X_test, y_train, y_test = train_test_split(df[['tinggi_badan', 'berat_badan']], df['label_manual'], test_size=0.1, random_state=42)
    model = GaussianNB()
    model.fit(X_train, y_train)
    y_pred = model.predict(X_test)
    accuracy = accuracy_score(y_test, y_pred)
    class_report = classification_report(y_test, y_pred, output_dict=True)

    # model = joblib.load('naive_bayes_stunting.pkl')
    sample_data = df1[['tinggi_badan', 'berat_badan']]
    predictions = model.predict(sample_data)
    df1['stunting_prediction'] = predictions
    df1_dict = df1.to_dict(orient='records')

    response = {
        'status': True,
        'message': 'Success',
        'result': df1_dict,
        'class_report': class_report,
    }

    return jsonify(response), 200

if __name__ == '__main__':
    app.run(host="localhost", port=5555, debug=True)
