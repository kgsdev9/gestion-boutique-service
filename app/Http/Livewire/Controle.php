protected function rules()
{
    return [
        'name' => 'required|string|max:255',
        'username' => 'required|min:6|max:255|alpha_dash|unique:users,username,' . $this->userID,
        'email' => 'required|string|email|max:255|unique:users,email,' . $this->userID
    ];
}

public function updateForm()
{
    $validatedData = $this->validate();

    $this->user->update($validatedData);

    session()->flash('message', 'User successfully updated.');
}
