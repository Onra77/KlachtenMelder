namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      //
    ];
  }
  public function rules()
{
  return [
    'name'    => 'required',
    'email'   => 'required|email',
    'msg'     => 'required'
  ];
}
}