<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name"> اسم مقدم الطلب</label>
        <input value="{{ old('name', $order->name ?? '') }}" name="name" type="text" class="form-control"
            id="name" placeholder=" اسم مقدم الطلب">
    </div>
    <div class="form-group col-md-6">
        <label for="type">النوع</label>
        <select name="type" id="type" class="form-control">
            <option value="">اختار النوع</option>
            <option value="مالك"{{ old('type', $order->type == 'مالك' ? 'selected' : '') }} name='type'>مالك
            </option>
            <option value="منتفع"{{ old('type', $order->type == 'منتفع' ? 'selected' : '') }} name='type'>منتفع
            </option>
        </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="id_number">رقم الهوية</label>
        <input value="{{ old('id_number', $order->id_number) }}" name="id_number" type="number" class="form-control"
            id="id_number" placeholder="رقم الهوية">
    </div>
    <div class="form-group col-md-6">
        <label for="phone"> رقم الجوال</label>
        <input value="{{ old('phone', $order->phone) }}" name="phone" type="number" class="form-control"
            id="phone" placeholder=" رقم الجوال">
    </div>
</div>
<div class="form-group">
    <label for="address">العنوان</label>
    <input value="{{ old('address', $order->address) }}" name="address" type="text" class="form-control"
        id="address" placeholder="العنوان">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="piece_number"> رقم القسيمة</label>
        <input value="{{ old('piece_number', $order->piece_number) }}" name="piece_number" type="number"
            class="form-control" id="piece_number">
    </div>
    <div class="form-group col-md-4">
        <label for="voucher_number">رقم القطعة</label>
        <input value="{{ old('voucher_number', $order->voucher_number) }}" name="voucher_number" type="number"
            class="form-control" id="voucher_number">
    </div>
</div>
<div class="form-group">
    <label for="file">المرفقات</label>
    <input value="{{ old('file', $order->file) }}" name="file" type="file" class="form-control" id="address"
        placeholder="المرفقات">
</div>
<div class="form-group">
    <label for="subject">الموضوع</label>
    <textarea  name="subject" id="subject" class="form-control"
        cols="100" rows="5">{{ old('subject', $order->subject) }}</textarea>
</div>
{{-- <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> --}}
