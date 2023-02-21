
import { Link } from 'react-router-dom';
function login_Main(){

    return(    
    <form className='loginpage'>
        <h2 className='underline'>Login</h2>
        <label htmlFor="email"></label>
        <input type="email" id="email" name="email" placeholder='E-mail'  required/>

        <label htmlFor="password"></label>
        <input type="password" id="password" name="password" placeholder='Password' required/>
        <section className='link'>
        <Link to="/dashboard_Homepage"><input type="submit" value="Login"className="login"/></Link>
        <Link to="/signuppage"><input type="submit" value="signup"className="signup"/></Link>
        </section>
    </form>
)
}
export default login_Main