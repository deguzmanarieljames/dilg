# face_recognition_script.py
import face_recognition
import sys
import json

def recognize_face(uploaded_image_path, known_image_path):
    uploaded_image = face_recognition.load_image_file(uploaded_image_path)
    known_image = face_recognition.load_image_file(known_image_path)

    uploaded_encoding = face_recognition.face_encodings(uploaded_image)[0]
    known_encoding = face_recognition.face_encodings(known_image)[0]

    results = face_recognition.compare_faces([known_encoding], uploaded_encoding)
    return results[0]

if __name__ == "__main__":
    uploaded_image_path = sys.argv[1]
    known_image_path = sys.argv[2]
    result = recognize_face(uploaded_image_path, known_image_path)
    print(json.dumps({"match": result}))
