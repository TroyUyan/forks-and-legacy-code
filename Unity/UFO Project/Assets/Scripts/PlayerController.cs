using UnityEngine;
using System.Collections;

public class PlayerController : MonoBehaviour {

	// shows up in editor
	// make changes in editor
	public float speed;

	// get the rb2d component
	private Rigidbody2D rb2d;

	void Start()
	{
		rb2d = GetComponent<Rigidbody2D> ();
	}

	// apply physics per frame
	void FixedUpdate()
	{
		float moveHorizontal = Input.GetAxis ("Horizontal");
		float moveVertical = Input.GetAxis ("Vertical");
		Vector2 movement = new Vector2 (moveHorizontal, moveVertical);
		rb2d.AddForce (movement * speed);
	}
}
