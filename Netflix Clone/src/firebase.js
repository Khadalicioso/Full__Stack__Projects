import { initializeApp } from "firebase/app";
import {
  createUserWithEmailAndPassword,
  getAuth,
  signInWithEmailAndPassword,
  signOut,
} from "firebase/auth";
import { addDoc, collection, getFirestore } from "firebase/firestore";
import { toast } from "react-toastify";

const firebaseConfig = {
  apiKey: "AIzaSyD4kXkJ51j1MCKtd-Bzrr5e0YFU9FT56-A",
  authDomain: "netflix-clone-898fe.firebaseapp.com",
  projectId: "netflix-clone-898fe",
  storageBucket: "netflix-clone-898fe.firebasestorage.app",
  messagingSenderId: "432506741414",
  appId: "1:432506741414:web:a87fcaa747e8d0dafc4a67",
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);

const signup = async (name, email, password) => {
  try {
    const res = await createUserWithEmailAndPassword(auth, email, password);
    const user = res.user;
    await addDoc(collection(db, "user"), {
      uid: user.uid,
      name,
      authProvider: "local",
      email,
    });
  } catch (error) {
    console.log(error);
    toast.error(error.code.split("/")[1].split("-").join(""));
  }
};

const login = async (email, password) => {
  try {
    await signInWithEmailAndPassword(auth, email, password);
  } catch (error) {
    console.log(error);
    toast.error(error.code.split("/")[1].split("-").join(""));
  }
};

const logout = async () => {
  signOut(auth);
};

export { auth, db, login, signup, logout };