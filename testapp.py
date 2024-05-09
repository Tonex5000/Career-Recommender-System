from flask import Flask, render_template, request, url_for
import pickle
import numpy as np

app = Flask(__name__)

@app.route('/cook.html')
def cook():
    # Logic for rendering the cook page
    return render_template("cook.html")

@app.route('/main.html')
def main():
    # Logic for rendering the blog page
    return render_template("main.html")

@app.route('/blog.php')
def blog():
    # Logic for rendering the blog page
    return render_template("blog.php") 

@app.route('/Technical_writer.php')
def Technical_writer():
    # Logic for rendering the blog page
    return render_template("Technical_writer.php")

@app.route('/Software_tester.php')
def Software_tester():
    # Logic for rendering the blog page
    return render_template("Software_tester.php")

@app.route('/Software_developer.php')
def Software_developer():
    # Logic for rendering the blog page
    return render_template("Software_developer.php")

@app.route('/Project_Manager.php')
def Project_Manager():
    # Logic for rendering the blog page
    return render_template("Project_Manager.php")

@app.route('/Penetration_Tester.php')
def Penetration_Tester():
    # Logic for rendering the blog page
    return render_template("Penetration_Tester.php")

@app.route('/Networking_engineer.php')
def Networking_engineer():
    # Logic for rendering the blog page
    return render_template("Networking_engineer.php")

@app.route('/Information_Security_Specialist.php')
def Information_Security_Specialist():
    # Logic for rendering the blog page
    return render_template("Information_Security_Specialist.php")


@app.route('/Helpdesk_Engineer.php')
def Helpdesk_Engineer():
    # Logic for rendering the blog page
    return render_template("Helpdesk_Engineer.php")


@app.route('/Hardware_Engineer.php')
def Hardware_Engineer():
    # Logic for rendering the blog page
    return render_template("Hardware_Engineer.php")


@app.route('/Graphic_Designer.php')
def Graphic_Designer():
    # Logic for rendering the blog page
    return render_template("Graphic_Designer.php")

@app.route('/Database_Administrator.php')
def Database_Administrator():
    # Logic for rendering the blog page
    return render_template("Database_Administrator.php")


@app.route('/Data_Scientist.php')
def Data_Scientist():
    # Logic for rendering the blog page
    return render_template("Data_Scientist.php")

@app.route('/Cyber_Security_Specialist.php')
def Cyber_Security_Specialist():
    # Logic for rendering the blog page
    return render_template("Cyber_Security_Specialist.php")

@app.route('/Customer_service_executive.php')
def Customer_service_executive():
    # Logic for rendering the blog page
    return render_template("Customer_service_executive.php")

@app.route('/Business_Analyst.php')
def Business_Analyst():
    # Logic for rendering the blog page
    return render_template("Business_Analyst.php")

@app.route('/Application_Support_Engineer.php')
def Application_Support_Engineer():
    # Logic for rendering the blog page
    return render_template("Application_Support_Engineer.php")
 

 
@app.route('/API_Integration_Specialist.html')
def API_Integration_Specialist():
    # Logic for rendering the blog page
    return render_template("API_Integration_Specialist.html")

@app.route('/AI_ML_Specialist.php')
def AI_ML_Specialist():
    # Logic for rendering the blog page
    return render_template("AI_ML_Specialist.php")

@app.route('/eating.html')
def eating():
    # Logic for rendering the blog page
    return render_template("eating.html")


@app.route('/')
def career():
    return render_template("hometest.html")


 
@app.route('/predict', methods=['POST', 'GET'])
def result():
    if request.method == 'POST':
        result = request.form
        res = result.to_dict(flat=True)
        arr1 = res.values()
        # Convert selected values to numeric types
        arr = [int(value) for value in arr1]
        data = np.array(arr).reshape(1, -1)
        loaded_model = pickle.load(open("careerlast.pkl", 'rb'))
        predictions = loaded_model.predict(data)
        pred = loaded_model.predict_proba(data)
        pred = pred > 0.05
        index = 0
        res = {}
        final_res = {}
        j = 0
        while j < 17:
            if pred[0, j]:
                res[index] = j
                index += 1
            j += 1
        index = 0
        for key, value in res.items():
            if value != predictions[0]:
                final_res[index] = value  # Store the index of the predicted job role
                print('final_res[index]:', final_res[index])
                index += 1
        print(final_res)
        jobs_dict = {
            0: 'AI ML Specialist',
            1: 'API Integration Specialist',
            2: 'Application Support Engineer',
            3: 'Business Analyst',
            4: 'Customer Service Executive',
            5: 'Cyber Security Specialist',
            6: 'Data Scientist',
            7: 'Database Administrator',
            8: 'Graphics Designer',
            9: 'Hardware Engineer',
            10: 'Helpdesk Engineer',
            11: 'Information Security Specialist',
            12: 'Networking Engineer',
            13: 'Project Manager',
            14: 'Software Developer',
            15: 'Software Tester',
            16: 'Technical Writer'
        }
        print("Predicted value:", predictions[0])
        print("jobs_dict:", jobs_dict)

        # Reverse the jobs_dict
        reversed_jobs_dict = {v: k for k, v in jobs_dict.items()}
        
        # Get the top 3 predicted roles and their probabilities
        top_predicted_roles = []
        for role_index in list(final_res.values())[:3]:
            predicted_role = jobs_dict[role_index]
            predicted_probability = pred[0, role_index]
            top_predicted_roles.append((predicted_role, predicted_probability))

        career_links = {
            'AI ML Specialist': 'AI_ML_Specailist.php',
            'API Integration Specialist': 'API_Integration_Specialist.php',
            'Application Support Engineer': 'Application_Support_Engineer.php',
            'Business Analyst': 'Business_Analyst.php',
            'Customer Service Executive': 'Customer_service_executive.php',
            'Cyber Security Specialist': 'Cyber_Security_Specialist.php',
            'Data Scientist': 'Data_Scientist.php',
            'Database Administrator': 'Database_Administrator.php',
            'Graphics Designer': 'Graphics_Designer.php',
            'Hardware Engineer': 'Hardware_Engineer.php',
            'Helpdesk Engineer': 'Helpdesk_Engineer.php',
            'Information Security Specialist': 'Information_Security_Specialist.php',
            'Networking Engineer': 'Networking_engineer.php',
            'Project Manager': 'Project_Manager.php',
            'Software Developer': 'Software_Developer.php',
            'Software Tester': 'Software_Tester.php',
            'Technical Writer': 'Technical_Writer.php',
        }

        # Create a list to store the predicted roles along with their links
        predicted_roles_with_links = []

        # Iterate through the top predicted roles
        for role, _ in top_predicted_roles:
            # Check if the predicted role has a corresponding link
            if role in career_links:
                # Append the predicted role and its link to the list
                predicted_roles_with_links.append((role, career_links[role]))
            else:
                # If no link is available, append the role with an empty string as the link
                predicted_roles_with_links.append((role, ''))

        # Pass the list of predicted roles with links to the Jinja template
        return render_template("testafter.html", predicted_roles=predicted_roles_with_links)
    
    # If the request method is not POST, return a default response
    return "Invalid request method."



      
if __name__ == '__main__':
   app.run(debug = True)
